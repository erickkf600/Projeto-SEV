<?php
include "conexoes/sistema-cadastro.inc";
$acao = $_REQUEST['acao'];
$email = $_REQUEST['email'];

if ($acao == "consultar_usuario") {

  $mysql = "SELECT email FROM usuarios WHERE email = '$email'";
  $res = $conexao->query($mysql);
  if($res->num_rows > 0) {
    echo "Este usuário já foi cadastrado no sistema";
  }

} else {

}
$conexao->close();
?>
