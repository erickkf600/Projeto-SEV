<?php
class Conexao {
  private $conta = "root";
  private $chave = "";
  private $banco = "u686630241_cstea";
  private $servidor = "localhost";
  private $con;

  public function __construct() {
    $this->con = mysqli_connect($this->servidor, $this->conta, $this->chave) or die("Estamos com problemas na conexão com o servidor".mysqli_error($this->con));
    mysqli_select_db($this->con, $this->banco) or die("Estamos com problemas na conexão com o Banco de Dados".mysqli_error($this->con));
  }

  public function getCon() {
    return $this->con;
  }
}
?>
