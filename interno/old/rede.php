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
            <div class="item proxmox" onclick="abrir('https://10.10.10.100:8006/','_blank')"></div>
            <div class="item pfsense" onclick="abrir('https://10.10.10.10:8007','_blank')"></div>
            <div class="item ha" onclick="abrir('http://10.10.10.250:8123/lovelace/escritorio','_blank')"></div>
            <div class="item pihole" onclick="abrir('http://10.10.10.249/admin/','_blank')"></div>
            <div class="item aaPanel" onclick="abrir('https://aapanel.rdfjorge.com.br:7800/4df1010c','_blank')"></div>
            <div class="item digitalocean" onclick="abrir('https://cloud.digitalocean.com/droplets/380625565/graphs?i=deb6bc&period=hour','_blank')"></div>
            
         <!--   <div class="item zabbix" onclick="abrir('http://10.10.10.248/zabbix/','_blank')"></div>
            <div class="item grafana" onclick="abrir('http://10.10.10.247:3000/','_blank')"></div>
            <div class="item truenas" onclick="abrir('https://10.10.10.245/ui/','_blank')"></div>
            <div class="item nextcloud" onclick="abrir('https://10.10.10.243/','_blank')"></div>
        -->
        </div>

        <div class="row">
            <div class="item meuip" onclick="abrir('https://meuip.com.br/','_blank')"></div>
            <div class="item fast" onclick="abrir('https://fast.com/pt/','_blank')"></div>
            <div class="item vivo" onclick="abrir('http://192.168.15.1/','_blank')"></div>
            <div class="item claro" onclick="abrir('http://192.168.0.1/','_blank')"></div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>