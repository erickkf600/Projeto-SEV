<?php
include "classes/Conexao.class.php";
include "DAO/usuariosDAO.class.php";
include "classes/usuarios-2.0.class.php";

$acao = $_REQUEST['acao'];

if ($acao == "consultar_email") {

  $email = $_REQUEST['email'];
  $usuarioDAO = new UsuarioDAO();
  $result = $usuarioDAO->consultarEmail($email);
  if($result == true) {
    echo "Este e-mail já está cadastrado.";
  } else {
    echo "E-mail disponível <i class='fa fa-thumbs-o-up'></i>";
  }
} else {

}
?>
