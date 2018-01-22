<?php
class Tecnico {
  private $tecnico;
  private $cadastro;
  private $cnpj;
  private $nome_empresarial;
  private $data_registro;
  private $profissao;
  private $documento;
  private $data;
  private $horario;
  private $situacao;

  public function __construct() {

  }

  public function getTecnico() {
    return $this->tecnico;
  }

  public function setTecnico($vlr) {
    $this->tecnico = $vlr;
  }

  public function getCadastro() {
    return $this->cadastro;
  }

  public function setCadastro($vlr) {
    $this->cadastro = $vlr;
  }

  public function getCnpj() {
    return $this->cnpj;
  }

  public function setCnpj($vlr) {
    $this->cnpj = $vlr;
  }

  public function getNomeEmpresarial() {
    return $this->nome_empresarial;
  }

  public function setNomeEmpresarial($vlr) {
    $this->nome_empresarial = $vlr;
  }

  public function getDataRegistro() {
    return $this->data_registro;
  }

  public function setDataRegistro($vlr) {
    $this->data_registro = $vlr;
  }

  public function getProfissao() {
    return $this->profissao;
  }

  public function setProfissao($vlr) {
    $this->profissao = $vlr;
  }

  public function getDocumento() {
    return $this->documento;
  }

  public function setDocumento($vlr) {
    $this->documento = $vlr;
  }

  public function getData() {
    return $this->data;
  }

  public function setData($vlr) {
    $this->data = $vlr;
  }

  public function getHorario() {
    return $this->horario;
  }

  public function setHorario($vlr) {
    $this->horario = $vlr;
  }

  public function getSituacao() {
    return $this->situacao;
  }

  public function setSituacao($vlr) {
    $this->situacao = $vlr;
  }
}
?>
