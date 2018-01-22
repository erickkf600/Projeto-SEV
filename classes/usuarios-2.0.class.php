<?php

class Usuario {
  var $registro;
  var $cadastro;
  var $email;
  var $senha;
  var $frase_seg;
  var $lembrete_senha;
  var $recup_senha;
  var $data;
  var $horario;
  var $situacao;

  public function getRegistro() {
    return $this->registro;
  }

  public function setRegistro($valor) {
    $this->registro = $valor;
  }

  public function getCadastro() {
    return $this->cadastro;
  }

  public function setCadastro($valor) {
    $this->cadastro = $valor;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($valor) {
    $this->email = $valor;
  }

  public function getSenha() {
    return $this->senha;
  }

  public function setSenha($valor) {
    $this->senha = $valor;
  }

  public function getFraseSeg() {
    return $this->frase_seg;
  }

  public function setFraseSeg($valor) {
    $this->frase_seg = $valor;
  }

  public function getLembreteSenha() {
    return $this->lembrete_senha;
  }

  public function setLembreteSenha($valor) {
    $this->lembrete_senha = $valor;
  }

  public function getRecupSenha() {
    return $this->recup_senha;
  }

  public function setRecupSenha($valor) {
    $this->recup_senha = $valor;
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
