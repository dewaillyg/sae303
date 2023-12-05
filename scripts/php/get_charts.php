<?php

function C2($label, $enedis, $grdf, $rte, $grt)
{

    $labels = json_encode($label);
    $data_enedis = json_encode($enedis);
    $data_grdf = json_encode($grdf);
    $data_rte = json_encode($rte);
    $data_grt = json_encode($grt);

    ?>

    <script>
      window.onload = function() {
        new Chart(document.getElementById('C2'), {
            type: 'line',
            data: {
                labels: <?php echo $labels; ?>,
                datasets: [
                  {
                    label: 'Enedis',
                    data: <?php echo $data_enedis ?>,
                    borderWidth: 1,
                    borderColor: '#e3e6ed',
                    backgroundColor: '#e3e6ed',
                    tension: 0.1,
                  }, {
                    label: 'GRDF',
                    data: <?php echo $data_grdf ?>,
                    borderWidth: 1,
                    borderColor: '#adc5ff',
                    backgroundColor: '#adc5ff',
                    tension: 0.1,
                  }, {
                    label: 'GRT Gaz',
                    data: <?php echo $data_grt ?>,
                    borderWidth: 1,
                    borderColor: '#0097eb',
                    backgroundColor: '#0097eb',
                    tension: 0.1,
                  }, {
                    label: 'RTE',
                    data: <?php echo $data_rte ?>,
                    borderWidth: 1,
                    borderColor: '#85a9ff',
                    backgroundColor: '#85a9ff',
                    tension: 0.1,
                }
              ]
            },
          });
      };
    </script>

    <?php
}

?>
