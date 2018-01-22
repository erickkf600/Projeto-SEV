<?php
require_once "Conexao.class.php";

class empresa {
  var $empresa;
  var $cnpj;
  var $razao_social;
  var $endereco;
  var $complemento;
  var $bairro;
  var $cidade;
  var $estado;
  var $pais;
  var $cep;
  var $telefone1;
  var $ramal1;
  var $responsavel1;
  var $telefone2;
  var $ramal2;
  var $responsavel2;
  var $site;
  var $data;
  var $horario;
  var $situacao;

  public function __contruct() {
    $this->con = new Conexao();
  }

  public function cadastrarEmpresa() {

  }

  public function consultarEmpresa() {

  }

  public function alterarEmpresa() {


  }

  public function excluirEmpresa() {

  }

  public function getEmpresa() {
    return $this->empresa;
  }

  public function setEmpresa($valor) {
    $this->empresa = $valor;
  }

  public function getCnpj() {
    return $this->cnpj;
  }

  public function setCnpj($valor) {
    $this->cnpj = $valor;
  }

  public function getRazaoSocial() {
    return $this->razao_social;
  }

  public function setRazaoSocial($valor) {
    $this->razao_social = $valor;
  }

  public function getEndereco() {
    return $this->endereco;
  }

  public function setEndereco($valor) {
    $this->endereco = $valor;
  }

  public function getComplemento() {
    return $this->complemento;
  }

  public function setComplemento($valor) {
    $this->complemento = $valor;
  }

  public function getBairro() {
    return $this->bairro;
  }

  public function setBairro($valor) {
    $this->bairro = $valor;
  }

  public function getCidade() {
    return $this->cidade;
  }

  public function setCidade($valor) {
    $this->cidade = $valor;
  }

  public function getEstado() {
    return $this->estado;
  }

  public function setEstado($valor) {
    $this->estado = $valor;
  }

  public function getPais() {
    return $this->pais;
  }

  public function setPais($valor) {
    $this->pais = $valor;
  }

  public function getCep() {
    return $this->cep;
  }

  public function setCep($valor) {
    $this->cep = $valor;
  }

  public function getTelefone1() {
    return $this->telefone1;
  }

  public function setTelefone1($valor) {
    $this->telefone1 = $valor;
  }

  public function getRamal1() {
    return $this->ramal1;
  }

  public function setRamal1($valor) {
    $this->ramal1 = $valor;
  }

  public function getResponsavel1() {
    return $this->responsavel1;
  }

  public function setResponsavel1($valor) {
    $this->responsavel1 = $valor;
  }

  public function getTelefone2() {
    return $this->telefone2;
  }

  public function setTelefone2($valor) {
    $this->telefone2 = $valor;
  }

  public function getRamal2() {
    return $this->ramal2;
  }

  public function setRamal2($valor) {
    $this->ramal2 = $valor;
  }

  public function getResponsavel2() {
    return $this->responsavel2;
  }

  public function setResponsavel2($valor) {
    $this->responsavel2 = $valor;
  }

  public function getSite() {
    return $this->site;
  }

  public function setSite($valor) {
    $this->site = $valor;
  }

  public function getData() {
    return $this->data;
  }

  public function setData($valor) {
    $this->data = $valor;
  }

  public function getHorario() {
    return $this->horario;
  }

  public function setHorario($valor) {
    $this->horario = $valor;
  }

  public function getSituacao() {
    return $this->situacao;
  }

  public function setSituacao($valor) {
    $this->situacao = $valor;
  }

  function cadastrar() {

  }
}
?>
