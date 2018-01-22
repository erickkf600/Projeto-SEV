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
  <script src="js/estatisticas-dispositivos.js"></script>
  <script src="js/cadastro.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/paginas.css">

</head>
<body onload="registrarNavegacao()" style="background-image: url(css/fundo2.jpg);">
<div class="container-fluid" style="text-align:center;">
  <a href="index.php">
      <img class="logo" src="css/LOGO1.png" alt="logo"></a>

  </div>
<div class="conteudo">
    <span style='float:right;'><a href="<?php echo $pagina; ?>"><i class="fa fa-close"></i></a></span>
 <form id="formulario-cadastro" name="cadastro" method="post" action="" onsubmit="return formCadastro();">
  <fieldset>
   <legend>Seja bem vindo ao nosso site, iremos cadastrar o seu usuário rapidinho.</legend>
   <label>Qual o seu nome?</label>
   <input class="entrada" type="text" name="nome" placeholder="digite o seu nome"></input><br>
   <font id="faltanome" class="alerta"></font><br>
   <label>E o seu sobrenome?</label>
   <input class="entrada" type="text" name="sobrenome" placeholder="digite o seu sobrenome"></input><br>
   <font id="faltasobrenome" class="alerta"></font>
   <hr>
   <input class="enviar" type="submit" value="Iniciar cadastro"></input>
  </fieldset>
 </form>
 <form style="display:none;" id="formulario-usuario" name="formulario-usuario" method="post" action="" onsubmit="return registrarUsuario();">
  <fieldset>
   <legend id="legenda-usuario"></legend>
   <input class="entrada" id="cadastro" type="hidden" name="cadastro"></input>
   <label>Informe-nos um e-mail!</label>
   <input class="entrada" id="email" type="email" name="email" placeholder="Digite o seu e-mail" onfocusout="consultarUsuario(this.value)"></input><br>
   <font id="erro-email" class="alerta"></font><br>
   <label>Para sua segurança crie uma senha!</label>
   <input class="entrada" type="password" id="senha" name="senha" placeholder="Digite uma senha"></input><br>
   <font id="faltasenha" class="alerta"></font><br>
   <label>Crie um lembrete para sua senha.</label>
   <input class="entrada" type="text" id="lembretesenha" name="lembretesenha" placeholder="Digite um lembrete para sua senha"></input><br>
   <font id="faltalembretesenha" class="alerta"></font><br>
   <label>Crie uma frase de segurança!</label>
   <input class="entrada" type="text" id="fraseseguranca" name="fraseseguranca" placeholder="Digite uma frase de segurança"></input><br>
   <font id="faltafraseseguranca" class="alerta"></font>
   <hr>
   <input class="enviar" type="submit" value="Cadastrar usuário"></input>
  </fieldset>
 </form>
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
