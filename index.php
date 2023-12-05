<?php

include './scripts/php/connexion.php';
include './scripts/php/get_datas.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="./styles/reset.css"/>
    <link rel="stylesheet" type="text/css" href="./styles/dashboard.css"/>
    <link rel="icon" href="./assets/img/favicon.ico" />

    <script type="text/javascript" src="./scripts/js/chartJs.js"></script>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
        <div class="avatar"></div>
    </header>
    <section class="section-one"></section>
    <section class="section-two">
        <?php 
            get_dep_conso_total(db());
        ?>
        <canvas id='C2'></canvas>
        <!-- style="position: absolute;
        max-width: 100%; max-height: 100%;" -->
    </section>
    <section class="section-three"></section>
    <section class="section-four"></section>
    <section class="section-five"></section>
    <section class="section-six"></section>
</body>
</html>