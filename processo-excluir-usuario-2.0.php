<?php
include "classes/Conexao.class.php";
include "DAO/usuariosDAO.class.php";

session_start();
$registro = $_SESSION['registro'];

$usuarioDAO = new UsuarioDAO();
$res = $usuarioDAO->excluirUsuario($registro);

if($res == true) {
  echo "Sua conta está cancelada";
  $_SESSION['registro'] = "";
  $_SESSION['usuario'] = "costeau.com.br";
} else {
  echo "Houve um problema no cancelamento da conta";
}
?>
