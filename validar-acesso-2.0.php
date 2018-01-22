<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Verificando sua conta...</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="scripts/estatisticas-dispositivos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.conteudo {
margin:auto;
margin-top:50px;
width:600px;
box-shadow:4px 4px 8px #333;
padding:50px;
border-radius:5px;
color:#666;
}

@media screen and (max-width:600px) {
.conteudo {
width:100%;
padding:15px;
}
}
</style>
</head>
<body>
<div class="container-fluid" style="border-bottom:5px solid blue;box-shadow:0px 5px 6px #333;text-align:center;">
<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8221672957358875"
     data-ad-slot="2692374740"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
-->
</div>
<div class="conteudo">
<?php
session_start();
$pagina = $_SESSION['pagina'];

include "classes/Conexao.class.php";
include "DAO/usuariosDAO.class.php";
include "classes/usuarios-2.0.class.php";

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$usuarioDAO = new UsuarioDAO();
$usuario = new Usuario();

$usuario->setEmail($email);
$usuario->setSenha($senha);

$res = $usuarioDAO->validarAcesso($usuario);

if ($res != false) {
  $_SESSION['registro'] = $res;
  $_SESSION['usuario'] = $email;
  echo "<h4 style='text-align:center;'>Aguarde um momento, estamos carregando seu dados...</h4>
<script>setTimeout(function () {window.location.href='".$pagina."';}, 4000);</script>";
} else {
  echo "<h4 style='text-align:center;color:orangered;'>Algum dado fornecido não confere com os dados cadastrados do seu usuário.</h4>
<script>setTimeout(function () {window.location.href='".$pagina."';}, 4000);</script>";
}
?>
</div>
</body>
</html>
