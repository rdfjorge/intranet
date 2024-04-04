<?php
require_once "../login/verifySession.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="./pwa.js"></script> -->
    <title>Central de rede</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <div class="app">
        <?php include("header.php") ?>
        <div class="row">
            <div class="item proxmox" onclick="abrir('https://www.rdfjorge.com.br:8006/','_blank')"></div>
            <div class="item pfsense" onclick="abrir('https://www.rdfjorge.com.br:8007','_blank')"></div>
            <div class="item ha" onclick="abrir('https://3byy3dx8orbu5dhm1fsiumeqt4ua5hzb.ui.nabu.casa','_blank')"></div>
            <div class="item meuip" onclick="abrir('https://meuip.com.br/','_blank')"></div>
            <div class="item fast" onclick="abrir('https://fast.com/pt/','_blank')"></div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>