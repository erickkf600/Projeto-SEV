<div id="menu-site" style="position:fixed;bottom:0px;width:100%;overflow:auto;padding:40px;background:#f5f;border:4px solid #fff;">
  <ul style="padding:15px;font-size:20px;display:inline;">
    <li class="item-menu"><a href="index.php?preferencias=francais"><i class="fa fa-home"></i> Início</a></li>
    <li class="item-menu"><a id="btn-prod"><i class="fa fa-shopping-basket"></i> Produtos</a></li>
    <li class="item-menu"><a id="btn-proj"><i class="fa fa-wpexplorer"></i> Projetos</a></li>
    <li class="item-menu"><a id="btn-suporte"><i class="fa fa-wrench"></i> Suporte</a></li>
    <li class="item-menu"><a id="btn-ao"><i class="fa fa-skyatlas"></i> Ambiente Online</a></li>
  </ul>
</div>

<div id="acesso" class="modal fade" role="dialog">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">
    <div class="row">
     <div class="col-md-6">
      <h3>Aproveite o seu ambiente online e os aplicativos dispon&iacute;veis para administrar sua empresa e organizar o seu neg&oacute;cio.</h3><hr>
      <a><i class="fa fa-address-card-o"></i> Quero cadastrar minha empresa.</a>
     </div>
     <div class="col-md-6">
      <form method="post" action="ambiente-online/verificar-acesso.php">
       <label>Grupo empresarial:</label>
       <input class="entrada" type="text" name="grupo" placeholder="Digite o nome do grupo empresarial">
       <label style='margin-top:25px;'>Usu&aacute;rio:</label>
       <input class="entrada" type="text" name="usuario" placeholder="digite o seu usu&aacute;rio">
       <label style='margin-top:25px;'>Acesse o seu ambiente com a senha fornecida pelo TI da sua empresa.</label>
       <input class="entrada" type="password" name="senha" placeholder="Digite sua senha">
       <input class="enviar" type="submit" value="Acessar sistema">
       <p style='color:orangered;font-size:12px;'>*Caso voc&ecirc; tenha esquecida sua senha, entre em contato com o TI respons&aacute;vel pelas credenciais da sua empresa.</p>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
