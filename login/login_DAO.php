<?php
session_start();
// print_r($_SESSION);
if(count($_POST) > 0 ){

   ##Busca os dados do formulário
   $login = $_POST["login"];
   $senha = $_POST["senha"];

   require_once "Conexao.php";

   // ECHO $login;
   try{
      
      $Conexao  = Conexao::getConnection();
      $consulta = $Conexao->prepare("SELECT id_usuario FROM dbo.t_usuarios where nm_login =:login and nm_senha =:senha");
      $consulta ->bindParam(':login', $login, PDO::PARAM_STR);
      $consulta ->bindParam(':senha', $senha, PDO::PARAM_STR);
      $consulta ->execute();
      $result = $consulta ->fetchAll();
      
      $qtde_user = count($result);
      
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
