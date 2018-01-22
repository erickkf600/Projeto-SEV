<nav class="navbar">
 <div class="container-fluid">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar" style="background:#00f;"></span>
    <span class="icon-bar" style="background:#00f;"></span>
    <span class="icon-bar" style="background:#00f;"></span>
   </button>
   <a class="navbar-brand" href="#"><?php echo $usuario; ?></a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
<?php
if ($usuario == "" or $usuario == "Visitante") {
echo "
   <ul class='nav navbar-nav navbar-right'>
    <li><a href='https://webmail1.hostinger.com.br/roundcube/'><span class='glyphicon glyphicon-envelope'></span> E-mail</a></li>
    <li><a href='cadastro-usuario.php?usuario=Visitante'><span class='glyphicon glyphicon-user'></span> Criar conta</a></li>
    <li><a data-target='#formulario-acesso' data-toggle='modal'><span class='glyphicon glyphicon-log-in'></span> Entrar</a></li>
   </ul>";
} else {
echo "<ul class='nav navbar-nav'>
<!--    <li class='active'><a href='#'>Perfil</a></li>
    <li><a href=''>Faturas</a></li>
    <li><a href=''>Suporte</a></li>
-->   </ul>
   <ul class='nav navbar-nav navbar-right'>
    <li><a href='entrada.php?usuario=Visitante&mensagem=Esperamos vê-lo novamente em breve.'><span class='glyphicon glyphicon-log-out'></span> Sair</a></li>
   </ul>";
}
?>
  </div>
 </div>
</nav>

<div id="formulario-acesso" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">
    <form name='formularioAcessoUsuario' method='post' action='<?php echo "validar-acesso.php?seguranca=".$seguranca."&pagina=".$pagina; ?>' onsubmit='return validarFormularioAcessoUsuario()'>
     <fieldset>
      <legend>Entre com o seu usuário e senha e agende uma visita técnica ou solicite um or&ccedil;amento.</legend>
      <label>Digite o seu usu&aacute;rio</label>
      <input class='entrada' type='text' name='email' placeholder='Digite o seu e-mail'></input>
      <label>Digite sua senha</label>
      <input class='entrada' type='password' name='senha' placeholder='Digite sua senha'></input>
      <input class='enviar' type='submit' value='Acessar conta'>
     </fieldset>
    </form>
    <hr>
    <a href='recuperarSenha.php?email=recuperacao'>Esqueci minha senha</a><br>
    <a href='cadastro-usuario.php?usuario=".$usuario."'>Quero me cadastrar</a>
   </div>
  </div>
 </div>
</div>
