<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/interno/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <div class="login">
        <h2>Efetue Login</h2>
        <form id="form_login" action="/login/login_DAO.php" method="post">
        <?php if(isset($retorno_tela) && $retorno_tela["cod"] == 0): ?>
                <div class="alert alert-danger">
                    <?php echo $retorno_tela["msg"]; ?>
                </div>
            <?php endif; ?>
            <?php if(isset($retorno_tela) && $retorno_tela["cod"] == 1): ?>
                <div class="alert alert-success">
                    <?php echo $retorno_tela["msg"]; ?>
                    <script>
                            window.location.href='/interno/index.php';
                    </script>
                </div>
            <?php endif; ?>

            <input type="login"    id="login"    name="login" placeholder="Digite seu login"><br><br>
            <input type="password" id="senha"    name="senha" placeholder="Digite sua senha"><br><br>
            <input type="submit"   id="submeter" value="Entrar" class= "btn btn-primary">

        </form>
    </div>
</body>
<script src="/interno/app.js"></script>

</html>