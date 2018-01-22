<?php
include "classes/Conexao.class.php";
include "DAO/cadastrosDAO.class.php";
include "classes/cadastros-2.0.class.php";

$cadastroDAO = new CadastroDAO();
$cadastro = new Cadastro();

$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$data = date("Y/m/d");
$horario = date("H:i:s");
$situacao = "Ativado";

$cadastro->setNome($nome);
$cadastro->setSobrenome($sobrenome);
$cadastro->setData($data);
$cadastro->setHorario($horario);
$cadastro->setSituacao($situacao);

$result = $cadastroDAO->iniciarCadastro($cadastro);

if ($result != false) {
  $id = $result;
  echo "{$id}+Seja bem vindo {$nome} {$sobrenome}, vamos começar a cadastrar o seu usuário.";
} else {
  echo "Desculpa {$nome}, aconteceu alguma falha no cadastro, quer falar direto com o técnico? (21) 981-672-297";
}
?>
