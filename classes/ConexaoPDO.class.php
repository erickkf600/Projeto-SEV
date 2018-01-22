<?php
class Conexao {
  private $conta;
  private $chave;
  private $banco;
  private $servidor;
  private static $pdo;

  public function __construct() {
    $this->servidor = "localhost";
    $this->banco = "u686630241_cadas";
    $this->conta = "root";
    $this->chave = "";
  }

  public function conectar() {
    try {
      if(is_null(self::$pdo)) {
        self::$pdo = new PDO("mysql:host=".$this->servidor.";banco=".$this->banco, $this->conta, $this->chave);
      }
      return self::$pdo;
    } catch (PDOException $ex) {

    }
  }
}
?>
