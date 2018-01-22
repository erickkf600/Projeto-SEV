<!DOCTYPE html>
<html> <!--SITE DE LAYOUTS https://www.bootstrapcdn.com/bootswatch/ -->
<head>
	<title>ERICK-TECH</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="../css/layout.css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="	anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>

<body class="body">

 <div class="header">
  <a href="../index.php">
      <img class="logo" src="../css/LOGO.png" alt="logo"></a>
   
 <!-- <ul class="menu-top">
  <li><a class="top" href="#"><i class="fa fa-user" aria-hidden="true"></i>  Login</a></li>
  <li><a class="top" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Cadastro</a></li>
  <li><a class="top" href="#"><i class="fa fa-phone-square" aria-hidden="true"></i>Contato</a></li>
</ul>


<ul class="carrinho">
  <li><a href="#"><b>Carrinho</b>  <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i></a></li>
 </ul>-->
</div>

<div id="navbar">
  <form>
  <input class="pesquisar" type="text" name="search" placeholder="Digite o que procura">
</form>
  	<!-- barra lateral -->
<ul class="menu"> <!-- Esse é o 1 nivel ou o nivel principal -->
  <li><a class="botao" href=#><span><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span><span><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></span><b>Departamentos</b></a>
  <ul class="submenu-1">
 <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
  <li><a href="#">Hardwere</a>
    <ul class="submenu-2"> 
      <li><a href="#">Placa-Mãe</a></li>
      <li><a href="#">Processadores</a></li>
      <li><a href="#">Memorias</a></li>
      <li><a href="#">Placas de Video</a></li>
      <li><a href="#">Fontes</a></li>
      <li><a href="#">Refrigeração</a></li>
      <li><a href="#">Gabinetes</a></li>
    </ul>
  </li> 

  <li><a href="#">Perifericos</a>
    <ul class="submenu-2"> 
      <li><a href="#">Monitores</a></li>
      <li><a href="#">Teclados</a></li>
      <li><a href="#">Mouses</a></li>
      <li><a href="#">Headsets</a></li>
    </ul>
  </li>

  <li><a href="#">Eletronicos</a>
    <ul class="submenu-2"> 
      <li><a href="#">Smartphones</a></li>
      <li><a href="#">Video Games</a></li>
      <li><a href="#">Smartwatch</a></li>
    </ul>
  </li>

  <li><a href="#">Acessorios</a>
    <ul class="submenu-2"> 
      <li><a href="#">Web Cans</a></li>
      <li><a href="#">Pendrives</a></li>
      <li><a href="#">Controles</a></li>
    </ul>
  </li>
           
  <li><a href="#">Rede</a>
    <ul class="ajuste"> 
      <li><a href="#">Wireless</a></li>
      <li><a href="#">Hub e switch</a></li>
      <li><a href="#">Cabos</a></li>
      <li><a href="#">Acessorios</a></li>
    </ul> 
  </li>  

  <li><a href="#">Cadeiras e mesas</a>
    <ul class="ajuste-2"> 
      <li><a href="#">Cadeiras gamer</a></li>
      <li><a href="#">Escritorio</a></li>
      <li><a href="#">Mesas gamer</a></li>
    </ul> 
  </li> 

  <li><a href="#">Mundo geek</a>
    <ul class="ajuste-3"> 
      <li><a href="#">Camisetas</a></li>
      <li><a href="#">Action figures</a></li>
      <li><a href="#">Drone</a></li>
    </ul> 
  </li>                 
                        
  </li>                               
  </ul>  
  </ul> 
</div>


<div class="pag">
	    <img class="img-fluid" src="../img/paginas/caixa.jpg"></a>
          <p style="color: black">CAIXA DE SOM VINIK 2.1 USB 3W RMS VS213 PRETA<br><b class="w3-text-red">R$50,90</b></p>
          <button class="btn btn-warning" type="button" href="#">Comprar</button>
          <button class="btn btn-outline-warning" type="button" href="#"><i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> Adicionar ao carrinho</button>

	<h4>Especificações</h4>
        
		<b>Marca</b><p>AMD</p>

		<b>Modelo</b><p>Ryzen 3 1300X</p>

		<b>Núcleos</b><p>4</p>

		<b>Threads</b><p>4</p>

		<b>Frequência Base</b><p>3.5GHz</p>

		<b>Frequência Avançada</b>p>3.7GHz</p>

		<b>Total L1 Cache</b><p>384KB<p>

		<b>Total L2 Cache</b><p>2MB</p>

		<b>Total L3 Cache</b><p>8MB<p>

		<b>Desbloqueado</b><p>Sim</p>

		<b>CMOS</b><p>14nm</p>

		<b>Soquete</b><p>AM4</p>

		<b>PCI Express</b><p>PCIe 3.0</p>

		<b>Refrigeração</b><p>Cooler box Wraith Stealth</p>

		<b>Consumo</b><p>65W</p>
</div>

  
<div id="mySidenav" class="sidenav">
  <a href="#" class="face"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
  <a href="#" class="twit"><i class="fa fa-twitter-square" aria-hidden="true"></i>Twitter</a>
  <a href="#" class="inst"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
  <a href="#" class="you"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>
</div>


</body>

  <ul class="under">
  <li class="barra"><a href="#">CONTATOS</a></li>
  <li class="barra"><a href="#">SAC</a></li>
  <li class="barra"><a href="#">POLÍTICAS DO SITE</a></li>
  <li class="barra"><a href="#">QUEM SOMOS</a></li>
</ul>

	<ul class="email">
<form>
  <input type="text" id="fname" name="fname" placeholder="Digite seu nome">
  <input class="e-mail" type="text" id="lname" name="lname" placeholder="Seu e-mail">
  <button class="btn btn-danger" type="button" href="#">Enviar</button>
</form>
</ul>
</form>

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
        <ul class="duv"> Segunda a sexta</ul>
        <ul class="duv">9h às 12h e das 13h às 18h</ul>
</div> 

<div class="info">

        <h4 >Formas de pagamento</h4>
        <img src="img/foot/banc.png" alt="boleto"></a>
        <img src="img/foot/vis.png" alt="visa"></a>
        <img src="img/foot/maste.png" alt="master"></a>
        <img src="img/foot/pay.png" alt="paypal"></a>
        
</div> 
<a href="caixa.php"><i class="fa fa-arrow-circle-up fa-5x" aria-hidden="true"></i></a>
</footer>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>
