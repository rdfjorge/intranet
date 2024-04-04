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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
    <div class="app">
        <?php include("header.php") ?>
            <div class="btn_centro_tela">
                <a href="/interno/arq/Instalador Windows.exe">
                    <button>Instalador Windows</button>
                </a><a href="/interno/arq/Certificado.ovpn">
                    <button>Certificado</button>
                </a>
            </div>
    </div>

    <script src="app.js"></script>
</body>

</html>