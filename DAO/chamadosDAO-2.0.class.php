<?php
class ChamadoDAO {

  private $conexao;

  public function __construct() {
    $this->conexao = new Conexao();
  }

  public function abrirChamado($chamado) {
    $mysql = "INSERT INTO chamados (usuario, categoria, agendamento, estado, cidade, endereco, descricao, data, horario, situacao) VALUES ('".$chamado->getUsuario()."', '".$chamado->getCategoria()."', '".$chamado->getAgendamento()."', '".$chamado->getEstado()."', '".$chamado->getCidade()."', '".$chamado->getEndereco()."', '".$chamado->getDescricao()."', '".$chamado->getData()."', '".$chamado->getHorario()."', '".$chamado->getSituacao()."')";
    if(mysqli_query($this->conexao->getCon(), $mysql)) {
      $id = mysqli_insert_id($this->conexao->getCon());
      return $id;
    } else {
      return false;
    }
  }
}
?>
