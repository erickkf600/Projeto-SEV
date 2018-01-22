<?php

echo "
  <section id='barra-usuario'>
    <span style='float:right;font-size:24px;margin:20px;'><a href='index.php?preferencias=selecionar'><i class='fa fa-globe'></i></a></span>
    <h3>".$usuario." <button id='abrir-menu-usuario' onclick='abrirMenuUsuario()'><i class='fa fa-caret-down'></i></button></h3>
    <div id='menu-usuario'>
      <ul>
        <li><a href='https://webmail1.hostinger.com.br/roundcube/'><i class='fa fa-envelope'></i> E-mail</a></li>
        <li><a href='index.php?preferencias=selecionar'><i class='fa fa-globe'></i> Langage</a></li>
";
if($usuario == "costeau.com.br") {
echo "
        <li><a href='cadastro-usuarios-2.0.php'><i class='fa fa-user'></i> Créer un compte</a></li>
        <li><a type='button' data-target='#formulario-acesso' data-toggle='modal' style='color:#66f;cursor:pointer;'><i class='fa fa-sign-in'></i> Connectez-vous</a></li>
";
} else {
echo "
        <li><a href='fechar-usuario-2.0.php'><i class='fa fa-sign-out'></i> Fermer</a></li>
";
}
echo "
      </ul>
    </div>
  </section>
";
?>
<div id="formulario-acesso" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">
    <form name='formularioAcessoUsuario' method='post' action='validar-acesso-2.0.php' onsubmit='return validarFormularioAcessoUsuario()'>
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
