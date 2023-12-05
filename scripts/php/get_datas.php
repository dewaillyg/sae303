<?php

include './scripts/php/get_charts.php';

function get_dep_conso_total($database) {
    $sql = $database->prepare('SELECT `Consommation totale (MWh)`, `Année`, `Opérateur` FROM consodepartement WHERE 1 ORDER BY `Année`;');
    $sql->execute();
    $datas = $sql->fetchAll(PDO::FETCH_ASSOC);

    
    $label = array(); // reception
    $labels = array(); // envoie

    $tab_enedis = $tab_grdf = $tab_grt = $tab_rte = array();

    //data
    
    foreach ($datas AS $data) {
        if (in_array($data['Année'], $label) === false) $label[] = $data['Année'];
    }

    foreach ($datas AS $data) {
        switch ($data['Opérateur']) {
            case 'Enedis' :
                $tab_enedis[] = intval($data['Consommation totale (MWh)']);
                break;
            case 'GRDF' :
                $tab_grdf[] = intval($data['Consommation totale (MWh)']);
                break;
            case 'RTE' :
                $tab_rte[] = intval($data['Consommation totale (MWh)']);
                break;
            case 'GRT Gaz' :
                $tab_grt[] = intval($data['Consommation totale (MWh)']);
                break;
        }
    }

    array_unshift($tab_rte, NULL);
    
    // Label dans l'ordre des années
    asort($label);
    $labelMin = array_shift($label);
    $labelMax = end($label); 
    
    // Label dans l'ordre des indexs ( + années )
    for ($i = $labelMin; $i <= $labelMax; $i++) {
        $labels[] = $i;
    }

    C2($labels, $tab_enedis, $tab_grdf, $tab_rte, $tab_grt);

    return;
}

?>