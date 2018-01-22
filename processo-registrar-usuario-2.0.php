<?php
include "classes/Conexao.class.php";
include "DAO/usuariosDAO.class.php";
include "classes/usuarios-2.0.class.php";

$usuarioDAO = new UsuarioDAO();
$usuario = new Usuario();

$cadastro = $_REQUEST['cadastro'];
$email = $_REQUEST['email'];
$senha = md5($_REQUEST['senha']);
$lembrete = $_REQUEST['lembrete'];
$frase = $_REQUEST['frase'];
$data = date("Y/m/d");
$horario = date("H:i:s");
$situacao = "Ativado";

session_start();
$_SESSION['usuario'] = $email;
$pagina = $_SESSION['pagina'];

$usuario->setCadastro($cadastro);
$usuario->setEmail($email);
$usuario->setSenha($senha);
$usuario->setFraseSeg($frase);
$usuario->setLembreteSenha($lembrete);
$usuario->setData($data);
$usuario->setHorario($horario);
$usuario->setSituacao($situacao);

$result = $usuarioDAO->registrarUsuario($usuario);

if ($result != false) {
  $registro = $result;
  echo "{$email}+{$pagina}+Seu usuário já está cadastrado, Aguarde um momento...";
} else {
  echo "Desculpa, aconteceu alguma falha no cadastro, quer falar direto com o técnico? (21) 981-672-297";
}
?>
