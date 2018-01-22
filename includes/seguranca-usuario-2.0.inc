<?php
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  if($usuario != "costeau.com.br") {
    if($_SESSION['seguranca'] != $_COOKIE['seguranca']) {
      $_SESSION['usuario'] = "costeau.com.br";
      $_SESSION['seguranca'] = "2";
      setcookie("seguranca", "1");
    } else {
      $seguranca = $_SESSION['seguranca'];
    }
  }
} else {
  $usuario = "costeau.com.br";
  $_SESSION['usuario'] = $usuario;
}
?>
