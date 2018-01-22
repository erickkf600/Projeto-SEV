<?php

class Cadastro {
  private $cadastro;
  private $nome;
  private $sobrenome;
  private $nascimento;
  private $endereco;
  private $complemento;
  private $bairro;
  private $cidade;
  private $estado;
  private $pais;
  private $cep;
  private $telefone;
  private $doctipo;
  private $docnum;
  private $data;
  private $horario;
  private $situacao;

  public function getCadastro() {
    return $this->cadastro;
  }

  public function setCadastro($vlr) {
    $this->cadastro = $vlr;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setNome($valor) {
    $this->nome = $valor;
  }

  public function getSobreNome() {
    return $this->sobrenome;
  }

  public function setSobreNome($valor) {
    $this->sobrenome = $valor;
  }

  public function getNascimento() {
    return $this->nascimento;
  }

  public function setNascimento($valor) {
    $this->nascimento = $valor;
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

  public function getTelefone() {
    return $this->telefone;
  }

  public function setTelefone($valor) {
    $this->telefone = $valor;
  }

  public function getDocTipo() {
    return $this->doctipo;
  }

  public function setDocTipo($valor) {
    $this->doctipo = $valor;
  }

  public function getDocNum() {
    return $this->docnum;
  }

  public function setDocNum($valor) {
    $this->docnum = $valor;
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
}
?>
