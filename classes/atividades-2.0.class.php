<?php
class Atividade {
  private $tecnico;
  private $primaria;
  private $atividade01;
  private $atividade02;
  private $atividade03;

  public function __construct() {

  }

  public function getTecnico() {
    return $this->tecnico;
  }

  public function setTecnico($vlr) {
    $this->tecnico = $vlr;
  }

  public function getPrimaria() {
    return $this->primaria;
  }

  public function setPrimaria($vlr) {
    $this->primaria = $vlr;
  }

  public function getAtividade01() {
    return $this->atividade01;
  }

  public function setAtividade01($vlr) {
    $this->atividade01 = $vlr;
  }

  public function getAtividade02() {
    return $this->atividade02;
  }

  public function setAtividade02($vlr) {
    $this->atividade02 = $vlr;
  }

  public function getAtividade03() {
    return $this->atividade03;
  }

  public function setAtividade03($vlr) {
    $this->atividade03 = $vlr;
  }
}
?>
