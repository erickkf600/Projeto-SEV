<?php
class Chamado {
  private $chamado;
  private $usuario;
  private $tecnico;
  private $categoria;
  private $agendamento;
  private $estado;
  private $cidade;
  private $endereco;
  private $descricao;
  private $data;
  private $horario;
  private $situacao;

  public function getChamado() {
    return $this->chamado;
  }

  public function setChamado($vlr) {
    $this->chamado = $vlr;
  }

  public function getTecnico() {
    return $this->tecnico;
  }

  public function setTecnico($vlr) {
    $this->tecnico = $vlr;
  }

  public function getUsuario() {
    return $this->usuario;
  }

  public function setUsuario($vlr) {
    $this->usuario = $vlr;
  }

  public function getCategoria() {
    return $this->categoria;
  }

  public function setCategoria($vlr) {
    $this->categoria = $vlr;
  }

  public function getAgendamento() {
    return $this->agendamento;
  }

  public function setAgendamento($vlr) {
    $this->agendamento = $vlr;
  }

  public function getEstado() {
    return $this->estado;
  }

  public function setEstado($vlr) {
    $this->estado = $vlr;
  }

  public function getCidade() {
    return $this->cidade;
  }

  public function setCidade($vlr) {
    $this->cidade = $vlr;
  }

  public function getEndereco() {
    return $this->endereco;
  }

  public function setEndereco($vlr) {
    $this->endereco = $vlr;
  }

  public function getDescricao() {
    return $this->descricao;
  }

  public function setDescricao($vlr) {
    $this->descricao = $vlr;
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
