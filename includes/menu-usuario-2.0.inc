<?php
echo "
  <section id='barra-usuario'>
    <span style='float:right;font-size:24px;margin:20px;'><a href='index.php?preferencias=selecionar'><i class='fa fa-globe'></i></a></span>
    <h3>".$usuario." <button id='abrir-menu-usuario' onclick='abrirMenuUsuario()'><i class='fa fa-caret-down'></i></button></h3>
    <div id='menu-usuario'>
      <ul>
        <li><a href='https://webmail1.hostinger.com.br/roundcube/'><i class='fa fa-envelope'></i> E-mail</a></li>
        <li><a href='index.php?preferencias=selecionar'><i class='fa fa-globe'></i> Idioma</a></li>
";
if($usuario == "costeau.com.br") {
echo "
        <li><a href='cadastro-usuarios-2.0.php'><i class='fa fa-user'></i> Criar conta</a></li>
        <li><a type='button' data-target='#formulario-acesso' data-toggle='modal' style='color:#66f;cursor:pointer;'><i class='fa fa-sign-in'></i> Entrar</a></li>
";
} else {
echo "
        <li><a href='painel-usuario-2.0.php'><i class='fa fa-user'></i> Painel</a></li>
        <li><a href='fechar-usuario-2.0.php'><i class='fa fa-sign-out'></i> Sair</a></li>
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
    <form name='acesso-conta' method='post' action='validar-acesso-2.0.php' onsubmit='return controlePreenchimento()'>
     <fieldset>
      <legend>Com o seu usuário você pode: Solicitar suporte técnico, usar nossas Aplicações Web, propor projetos para desenvolver com nossa equipe e muito mais.</legend>
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
  </div>
 </div>
</div>
