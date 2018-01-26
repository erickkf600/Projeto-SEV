<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	
<body background="fundo2.jpg" >

	<div class="container">
		<h1><font color ="#f2f3f4">Lista de Produtos</font></h1>
		<div class="container" style="background-color: white">

</div>
	</form>
	</div>
</div>
<div class="container">

	<!-- 		Inicio do Cabeçalho do Menu de Navegação 			  -->
		<nav class="navbar navbar-default navbar-fixed-top" style="height:30px;">
		<div class="navbar-inner">
			<div class="container-fluid">
				<div class="navbar-header">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				
				</div>
				<div class="collapse navbar-collapse" id="barra">
					<ul class="nav navbar-nav pull-right">
						<li><a href="clientes.php">Clientes</a></li>
						<li><a href="produtos.php">Produtos</a></li>
					</ul>
				</div>
			</div></div>
		</nav>
					<!-- 			Fim do Cabeçalho do Menu de Navegação 				 -->

			<div class="well" style="margin-top:-5px;">			
				<th><input type="text" ng-model="termoBusca" placeholder="Forma de Pagamento" class="form-control">
			</div></th>

			<table class="table table-striped table-bordered" >
				<thead>
					<tr>
						
					<th><a href ng-click="ordenar('nome')" ><font color ="#f2f3f4">Boleto</font></a>
						<input type="radio" name="gender" value="male" checked> <br>
					</th>											
						
					<th><font color ="#f2f3f4">Cartão de Crédito</font>
						<input type="radio" name="gender" value="male" checked><br>
						
					</th>

  					
 						<th><font color ="#f2f3f4"> Valor Total</font></th>

					
					</tr>
				</thead>
				<thead>
					<tr>
						
					<th></th>
					<th>	
						<!--<img src="img/bb.jpg " style="" width="40" height="40" /><br>
						<input type="radio" name="gender" value="male" checked><br>
						<img src="img/mastercard.jpg " style="" width="40" height="40" /><br>
						<input type="radio" name="gender" value="male" checked><br>
						<img src="img/visa.jpg " style="" width="40" height="40" /><br>
						<input type="radio" name="gender" value="male" checked><br> -->
						<img src="img/bb.jpg " style="" width="40" height="40" />
						<input type="radio" name="gender" value="male" checked><br>
						<img src="img/mastercard.jpg " style="" width="40" height="40" />
						<input type="radio" name="gender" value="male" checked><br>
						<img src="img/visa.jpg " style="" width="40" height="40" />
						<input type="radio" name="gender" value="male" checked><br>
						<img src="img/itau.jpg " style="" width="40" height="40" />
						<input type="radio" name="gender" value="male" checked><br>
						
					</th>

  					
 						<th ></th>

					
					</tr>
				</thead>
				<tbody>




					<!-- codigo PHP -->
					<?php
$i=0;
					while($i < 0){
					echo '<tr ng-repeat="pessoa in lista | filter:termoBusca">
						<td>{{pessoa.nome}}</td>
						<td>{{pessoa.email}}</td>
						<td>{{pessoa.cpf}}</td>	
						<td></td>					
					</tr>';
					$i++;
				}
				?>


				</tbody>
			</table>

						<th><button type="submit" class="btn btn-outline-primary"><font color="#f2f3f4"><a href="cadastro.php"><font color="#f2f3f4">Cancelar Compra</font></a></button></th>
						<th><button type="submit" class="btn btn-outline-primary"><font color="#f2f3f4"><a href="cadastro.php"><font color="#f2f3f4">Finalizar Compra</font></a></button></th>
</body>
</html>

<!--<input type="radio" name="gender" value="male" checked><br>
						<img src="img/bb.jpg " style="" width="40" height="40" /><br>
						<img src="img/mastercard.jpg " style="" width="40" height="40" /><br>
						<img src="img/visa.jpg " style="" width="40" height="40" /><br>
						<img src="img/itau.jpg " style="" width="40" height="40" /> -->