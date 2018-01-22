<?php
class CadastroDAO {

  private $conexao;

  public function __construct() {
    $this->conexao = new Conexao();
  }

  public function iniciarCadastro($cadastro) {
    $mysql = "INSERT INTO cadastros (nome, sobrenome, data, horario, situacao) VALUES ('".$cadastro->getNome()."', '".$cadastro->getSobrenome()."', '".$cadastro->getData()."', '".$cadastro->getHorario()."', '".$cadastro->getSituacao()."')";
    if(mysqli_query($this->conexao->getCon(), $mysql)) {
      $id = mysqli_insert_id($this->conexao->getCon());
      return $id;
    } else {
      return false;
    }
  }

  public function atualizarCadastro($atualizar) {
    $mysql = "UPDATE cadastros SET nome = '".$atualizar->getNome()."', sobrenome = '".$atualizar->getNome()."', nascimento = '".$atualizar->getNascimento()."', endereco = '".$atualizar->getEndereco()."', complemento = '".$atualizar->getComplemento()."', bairro = '".$atualizar->getBairro()."', cidade = '".$atualizar->getCidade()."', estado = '".$atualizar->getEstado()."', pais = '".$atualizar->getPais()."', cep = '".$atualizar->getCep()."', telefone = '".$atualizar->getTelefone()."' WHERE cadastro = '".$atualizar->getCadastro()."' AND situacao = 'Ativado'";
    if(mysqli_query($this->conexao->getCon(), $mysql)) {
      return true;
    } else {
      return false;
    }
  }
}
?>
