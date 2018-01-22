<?php
class Avaliacoes {
  private $avaliacao;
  private $usuario;
  private $tecnico;
  private $chamado;
  private $nota_tec;
  private $nota_usr;
  private $dia;
  private $horario;

  public function __construct {

  }

  public function getAvaliacao() {
    return $this->avaliacao;
  }

  public function setAvaliacao($vlr) {
    $this->avaliacao = $vlr;
  }

  public function getUusario() {
    return $this->usuario;
  }

  public function setUsuario($vlr) {
    $this->usuario = $vlr;
  }

  public function getTecnico() {
    return $this->tecnico;
  }

  public function setTecnico($vlr) {
    $this->tecnico = $vlr;
  }

  public function getChamado() {
    return $this->chamado;
  }

  public function setChamado($vlr) {
    $this->chamado = $vlr;
  }

  public function getNota_tec() {

  }

  private $chamado;
  private $nota_tec;
  private $nota_usr;
  private $dia;
  private $horario;
}
?>
