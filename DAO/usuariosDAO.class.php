<?php
class UsuarioDAO {

  private $con;

  public function __construct() {
    $this->con = new Conexao();
  }

  public function registrarUsuario($registro) {
    $mysql = "INSERT INTO usuarios (cadastro, usuario, senha, frase_seg, lembrete_senha, data, horario, situacao) VALUES ('".$registro->getCadastro()."', '".$registro->getEmail()."', '".$registro->getSenha()."', '".$registro->getFraseSeg()."', '".$registro->getLembreteSenha()."', '".$registro->getData()."', '".$registro->getHorario()."', '".$registro->getSituacao()."')";
    if(mysqli_query($this->con->getCon(), $mysql)) {
      $registro = mysqli_insert_id($this->con->getCon());
      return $registro;
    } else {
      return false;
    }
  }

  public function consultarEmail($email) {
    $mysql = "SELECT registro FROM usuarios WHERE usuario = '$email' AND situacao = 'Ativado'";
    $result = mysqli_query($this->con->getCon(), $mysql);
    if(mysqli_num_rows($result)) {
      return true;
    } else {
      return false;
    }
  }

  public function validarAcesso($usuario) {
    $mysql = "SELECT registro FROM usuarios WHERE email = '".$usuario->getEmail()."' AND senha = '".$usuario->getSenha()."' AND situacao = 'Ativado'";
    $result = mysqli_query($this->con->getCon(), $mysql);
    if(mysqli_num_rows($result)) {
      $info = mysqli_fetch_assoc($result);
      $registro = $info['registro'];
      return $registro;
    } else {
      return false;
    }
  }

  public function consultarLembrete($email) {
    $mysql = "SELECT lembrete_senha FROM usuarios WHERE email = '$email' AND situacao = 'Ativado'";
    $result = mysqli_query($this->con->getCon(), $mysql);
    if(mysqli_num_rows($result)) {
      $info = mysqli_fetch_assoc($result);
      $lembrete = $info['lembrete_senha'];
      return $lembrete;
    } else {
      return false;
    }
  }

  public function recuperarSenha($email) {
    //criar numero $controle
    $mysql = "UPDATE usuarios SET recup_senha = '$controle' WHERE email = '$email' AND situacao = 'Ativado";
    if(mysqli_query($this->con->getCon(), $mysql)) {
      $sql = "SELECT registro, frase_seg FROM usuarios WHERE email = '$email' AND situacao = 'Ativado'";
      $res = mysqli_query($this->con->getCon(), $sql);
      if(mysqli_num_rows($res)){
        $info = mysqli_fecth_assoc($res);
        $reg = $info['registro'];
        $frase = $info['frase_seg'];
        return $frase+$reg+$controle;
      } else {
        return false;
      }
    } else {
      return false;
    }
  }

  public function atualizarSenha($usuario) {
    
  }

  public function excluirUsuario($registro) {
    $mysql = "UPDATE usuarios SET situacao = 'excluido' WHERE registro = '$registro'";
    if(mysqli_query($this->con->getCon(), $mysql)) {
      return true;
    } else {
      return false;
    }
    
  }
}
?>
