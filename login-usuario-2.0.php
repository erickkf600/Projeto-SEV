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
  <title>Cadastro de usu&aacute;rio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/menu-usuario-2.0.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/paginas.css">

</head>
<body onload="registrarNavegacao()" style="background-image: url(css/fundo2.jpg);">

  <div class="container-fluid" style="text-align:center;">
    <a href="index.php">
      <img class="logo" src="css/LOGO1.png" alt="logo"></a>

  </div>
<div class="conteudo" role="dialog">
    <span style='float:right;'><a href="<?php echo $pagina; ?>"><i class="fa fa-close"></i></a></span>
 <form name='acesso-conta' method='post' action='validar-acesso-2.0.php' onsubmit='return controlePreenchimento()'>
     <fieldset>
      <legend>Entre com a sua conta</legend>
      <label>Digite o seu usu&aacute;rio</label>
      <input class='entrada' type='text' name='email' placeholder='Digite o seu e-mail'></input>
      <p id="lembrete-email"></p>
      <label>Digite sua senha</label>
      <input class='entrada' type='password' name='senha' placeholder='Digite sua senha'></input>
      <p id="lembrete-senha"></p>
      <input class='enviar' type='submit' value='Acessar conta'>
     </fieldset>
    </form>
    <hr>
    <a href='recuperar-senha-2.0.php'>Esqueci minha senha.</a><br>
    <a href='cadastro-usuarios-2.0.php?usuario=".$usuario."'>Ainda não tenho uma conta.</a>
</div>

  <footer class="down">

  <div class="info">
    <h4>Duvidas e Suporte</h4>
          <ul><a href="#" class="duv">Como comprar</a></ul>
          <ul><a href="#" class="duv">Entrega</a></ul>
          <ul><a href="#" class="duv">Garantia</a></ul>
          <ul><a href="#" class="duv">Troca e devolução</a></ul>
          <ul><a href="#" class="duv">Politica de privacidade</a></ul>
    </div>

    <div class="info">

          <h4>Horarios de atendimento</h4>
          <ul class="duv1"> Segunda a Sexta</ul>
          <ul class="duv">9h às 12h e das 13h às 18h</ul>
    </div> 

    <div class="info">

          <h4 >Formas de pagamento</h4>
          <img src="img/foot/banc.png" alt="boleto"></a>
          <img src="img/foot/vis.png" alt="visa"></a>
          <img src="img/foot/maste.png" alt="master"></a>
          <img src="img/foot/pay.png" alt="paypal"></a>
          
    </footer>
 </div>
</body>
</html>
