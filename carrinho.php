<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Carrinho de compras</title>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="	anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/.css">
	<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
	<style>
	body{
		background-image: url(img/fundo2.jpg);
	}

	.container{
		background-color:white;
	}
	
body {
	color: #0F4392;
	font-family: arial;
}

.container{
	width: 60%;
	height: 100%;
	margin: 0 auto;
}

.info-album img {
	max-width: 150px;
  	max-height: 150px;
  	width: 100%;
  	height: 100%;

	float: left;
	padding-right: 10px;
}

.info-album h3{
	margin:0;	
}

.info-album span {
	color: #6F6F6F;
}
.info-album input {
	margin: 10px 0 10px 0;	
}

.price {
	color: #CF0A2C;	
}

.info-quantidade input {
	width: 40px;
}

#total {
	color: #CF0A2C;
}

.total-compra {
 text-align: right;
 font-weight: bold;
}

.title {
	color: #CF0A2C;
	margin: 0;

}

table {
	width: 100%;
	border-collapse:collapse;
    border-spacing:0;
}


td, th {
	border-bottom: 1px solid #CDE3EB;
	margin: 0px;
	padding: 10px;
}

td, th {
	text-align: left;
}

.button{
	padding-right:30%;
}
.under{
    list-style-type: none;
    margin: 0px;
    margin-left: 285px;
    padding: 3px;
    overflow: hidden;
    background-color: #c11717;
    width:61.38%;
    margin-top: 15px;

}

.barra{
    float: left;

}

.barra a {
	font-family: fantasy;
	font-size: 18px;
    font-weight:300;
    display: block;
    color: white;
    text-align: center;
    padding: 10px 55px;
    margin-left: 70px;
}

.barra a:hover{
    left: 10px;
    color: black;
    text-decoration:none;
}
.email{
	list-style-type: none;
	font-family: fantasy;
	font-weight:200;
    margin: 0px;
    margin-left: 285px;
    margin-bottom: 30px;
    padding: 7px 0px;
    overflow: hidden;
    background-color: #f20000;
    width:61.38%;
    background-color: #848484;
    background-image: url(LOGO2.png);
    background-repeat: no-repeat;
    

}

/*linhas digitaveis*/
input[type=text] {
    width: 26%;
    padding: 4px 5px;
    margin: 0px -280px;
    margin-left: 30%;
    box-sizing: border-box;
    position: inherit;
}

	/*botão enviar*/
.btn.btn-danger{
    cursor: pointer;
    border:none;
    background-color: #c11717;
    color: black;
    margin-left:25%; 
      
}


.btn.btn-danger:hover {
    background-color: #d30e0e; 
    color: white;
    box-shadow: 0px 9px 16px 0px rgba(0,0,0,0.2);
}

.btn.btn-danger{
    padding: 5px 25px;
}



/*Footer*/

.down{
	float: left;
    width: 100%;
    padding: 0px;
    height: 250px;
	background-color:#c41313;
}	

.info{
	float: left;
	margin-top:10px;
	margin-left: 12%;
	color: #ffffff;
 }
.info ul a{
	text-decoration:none;
	color: white;

}

.info ul a:hover{
	color:black;
}

.fa.fa-arrow-circle-up{
    color:white;
    padding-top: 80px;
    margin-left: 45px;
    padding-left: 410px;

}

.duv1{
	margin-left:16%;
}

/* formulario login */
.form-group{
	margin-left:35%;
}
.login{
	margin-top:2%;
	margin-left:41%;
}

.bot{
	margin-left:41%;
}

.bota{
	margin-left:35%;
}

.form-group1{
	margin-top:20%;
	margin-left:35%;
}



</style>
</head>
<body>
  <header class="container">
	<h1 class="h">SEV</h1>
  </header>
  <section class="container"  style="padding-bottom: 30%;">
	  <h2 class="title while">Carrinho de compras</h2>
	  <table>
			<tbody>
			    <tr>
			    	<th>Itens para comprar</th>
			    	<th>Preço</th>
			    	<th>Quantidade</th>
					<th>Produto</th>
			    </tr>
			    <tr class="produto">
				<td>Smartphone</td>
				<td>R$1,500,00</td>
				<td>1</td>
				<td><img src="img/rysen.jpg"></td>
				</tr>
			</tbody>
	
		
	  </table>
</section>
<button class="btn btn-warning" type="button" href="#" style="margin-left:71%; margin-top:-5%;">Finalizar Compra</button>
<button class="btn btn-warning" type="button" href="#" style="margin-left:60%; margin-top:-7.5%;">Continuar comprando</button>

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
<a href="index.html"><i class="fa fa-arrow-circle-up fa-5x" aria-hidden="true"></i></a>
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
<script type="text/javascript" src="js/rogus.js"></script>
</html>