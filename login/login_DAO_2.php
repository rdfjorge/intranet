<?php
include('Conexao.php');
session_start();
// print_r($_SESSION);
if(count($_POST) > 0 ){

   ##Busca os dados do formulário
   $login = mysqli_real_escape_string($conexao, $_POST["login"]);
   $senha = mysqli_real_escape_string($conexao, $_POST["senha"]);

   // ECHO $login;
   try{
      
      $query = "select id_usuario from t_usuarios where nm_login = '($login)' and nm_senha = '($senha)'";

      $result = mysqli_query($conexao, $query);
      
      $qtde_user = mysqli_num_rows($result);
      
      // ECHO $senha;
      IF($qtde_user ==1){
         
         $retorno_tela["msg"] = "Usuário Encontrado!";
         $retorno_tela["cod"] = 1;
         $_SESSION['logado'] = true;
         $_SESSION['usuario'] = $login;

         header('Location: /interno');
         
      } elseif ($qtde_user == 0) {
         $retorno_tela["msg"] = "login ou Usuário Inválido!";
         $retorno_tela["cod"] = 0;
      }

   }catch(Exception $e){
      echo $e->getMessage();
      exit;
   }
   $Conexao = null;
}
include("login.php");

?>
