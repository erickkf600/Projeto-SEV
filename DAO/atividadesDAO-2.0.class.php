<?php
class AtividadeDAO {

  private $conexao;

  public function __construct() {
    $this->conexao = new Conexao();
  }

  public function registrarAtividades($atividades) {
    $mysql = "INSERT INTO atividades (tecnico, primaria, secundaria01, secundaria02, secundaria03) VALUES ('".$atividades->getTecnico()."', '".$atividades->getPrimaria()."', '".$atividades->getAtividade01()."', '".$atividades->getAtividade02()."', '".$atividades->getAtividade03()."')";
    if(mysqli_query($this->conexao->getCon(), $mysql)) {
      $id = mysqli_insert_id($this->conexao->getCon());
      return $id;
    } else {
      return false;
    }
  }
}
?>
