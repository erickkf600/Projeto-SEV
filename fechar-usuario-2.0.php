<?php
session_start();
$pagina = $_SESSION['pagina'];

$_SESSION['usuario'] = "costeau.com.br";

header("location: ".$pagina);
?>
