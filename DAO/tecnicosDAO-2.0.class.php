<?php
class TecnicoDAO {
  private $conexao;

  public function __construct() {
    $this->conexao = new Conexao();
  }

  public function registrarTecnico($tecnico) {
    $mysql = "INSERT INTO tecnicos (cadastro, cnpj, nome_empresarial, data_registro, profissao, documento, data, horario, situacao) VALUES ('".$tecnico->getCadastro()."', '".$tecnico->getCnpj()."', '".$tecnico->getNomeEmpresarial()."', '".$tecnico->getDataRegistro()."', '".$tecnico->getProfissao()."', '".$tecnico->getDocumento()."', '".$tecnico->getData()."', '".$tecnico->getHorario()."', '".$tecnico->getSituacao()."')";
    if(mysqli_query($this->conexao->getCon(), $mysql)) {
      $id = mysqli_insert_id($this->conexao->getCon());
      return $id;
    } else {
      return false;
    }
  }
}
?>
