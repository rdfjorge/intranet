<?php
require_once "../login/verifySession.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="./pwa.js"></script> -->
    <title>Central de M&iacute;dia</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div class="app">
        <?php include("header.php") ?>
        <div class="row">
            <div class="item netflix" onclick="abrir('https://netflix.com')"></div>
            <div class="item prime" onclick="abrir('https://primevideo.com/')"></div>
            <div class="item youtube" onclick="abrir('https://youtube.com')"></div>
            <div class="item twitch" onclick="abrir('https://twitch.tv')"></div>
            <div class="item disney" onclick="abrir('https://www.disneyplus.com/pt-br/')"></div>
            <div class="item plutotv" onclick="abrir('https://pluto.tv/')"></div>
            <div class="item globoPlay" onclick="abrir('https://globoplay.globo.com/agora-na-tv/')"></div>
            <div class="item hbomax" onclick="abrir('https://play.hbomax.com/profile/select')"></div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>