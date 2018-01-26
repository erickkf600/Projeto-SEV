<?php
session_start();
if (isset($_SESSION['pagina'])) {
  $pagina = $_SESSION['pagina'];
} else {
  $_SESSION['pagina'] = "index.php";
}
include "includes/estatisticas-dispositivos.inc";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <title>Processo para recuperação de senha</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/paginas.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="js/recuperar-senha-2.0.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .fa.fa-arrow-left{
    margin-left: -200%;
  }
</style>
<body style="background-image: url(css/fundo2.jpg);">
 <div class="container-fluid" style="text-align:center;">

  <a href="index.php">
      <img class="logo" src="css/LOGO1.png" alt="logo"></a>

  </div>
<div class="conteudo">
<?php
if(isset($_GET['usuario'])) {
  $usuario = $_GET['usuario'];
  $controle = $_GET['controle'];
  echo '
    <span id="caixa">
     <form id="formulario-email" name="recuperar" method="post" action="" onsubmit="return formCadastro();">
  <fieldset>
   <legend>Digite uma nova senha para liberar o acesso da sua conta ao sistema.</legend>
   <label>Digite uma senha nova.</label>
   <input class="entrada" id="senha" type="password" name="senha" placeholder="Digite uma senha nova"></input><br>
   <font id="alertasenha" class="alerta"></font><br>
   <input class="entrada" id="senha2" type="password" name="senha2" placeholder="Redigite sua senha nova"></input><br>
   <font id="alertasenha2" class="alerta"></font><br>
   <p style="text-align:center;font-size:20px;"><button class="enviar" type="button" onclick="atualizarSenha('.$usuario.'+'.$controle.')"><i class="fa fa-arrow-right"></i></button></p>
  </fieldset>
 </form>
  </span>
  ';
} else {
  echo '
    <span style="float:right;"><a href="'.$pagina.'"><i class="fa fa-close"></i></a></span>
    <span style="float:left;"><a href="login-usuario-2.0.php"><i class="fa fa-arrow-left"></i></a></span>
    <span id="caixa">
 <form id="formulario-email" name="recuperar" method="post" action="" onsubmit="return formCadastro();">
  <fieldset>
   <legend>Digite o seu e-mail para recuperar sua senha.</legend>
   <label>Digite o seu e-mail.</label>
   <input class="entrada" id="email" type="text" name="email" placeholder="digite o seu email"></input><br>
   <font id="faltaemail" class="alerta"></font><br>
   <p style="text-align:center;font-size:20px;"><button class="enviar" type="button" onclick="consultarLembrete()"><i class="fa fa-arrow-right"></i></button></p>
  </fieldset>
 </form>
  </span>
  ';
}
?>
</div>
</body>
</html>
