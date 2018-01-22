<?php
include "classes/Conexao.class.php";
include "DAO/usuariosDAO.class.php";
include "classes/usuarios.class.php";
$acao = $_REQUEST['acao'];

if($acao == "lembrete") {
  $email = $_REQUEST['email'];
  $usuarioDAO = new UsuarioDAO();
  $result = $usuarioDAO->consultarLembrete($email);
  if($result != false) {
    echo "
      <h3 style='text-align:center;'>Lembrete da sua senha:<br>{$result}</h3>
      <button style='width:100%;height:40px;background:orangered;border:1px solid #ddd;color:#fff;' type='button' onclick='enviarEmail('{$email}')'>Não adiantou, não lembrei</button>
    ";
  } else {
    echo "E-mail não encontrado<br>Suporte (21) 981-672-297";
  }
} else if ($acao == "enviar") {
  $email = $_REQUEST['email'];
  $usuarioDAO = new UsuarioDAO();
  $res = $usuarioDAO->recuperarSenha($email);
  if($res != false) {
    $dados = explode("+", $res);
    if(mail($email, "Recuperação de senha", "Para recuperar a sua senha você precisa clicar no link abaixo, mas antes de clicar confira sua frase de segurança, isso valida os e-mails que você receberá de nosso sistema./n/n frase de segurança: $dados[0] /n/n link: https://www.costeau.com.br/recuperar-senha-2.0.php?usuario=$dados[1]&controle=$dados[2]")){
      echo "Acabamos de enviar um e-mail de recuperação da sua senha para $email, entre em sua caixa de e-mail e siga as instruções para recuperar sua senha";
    } else {
      echo "Houve um erro na recuperação da sua senha, você pode entrar em contato com o suporte (21) 981-672-297";
    }
  } else {
    echo "Houve um erro na recuperação da sua senha, você pode entrar em contato com o suporte (21) 981-672-297";
  }
} else if ($acao == "atualizar") {
  $usr = $_REQUEST['usuario'];
  $controle = $_REQUEST['controle'];
  $usuarioDAO = new UsuarioDAO();
  $usuario = new Usuario();

  $usuario->setRecupSenha($controle);
  $usuario->setRegistro($usr);

  $res = $usuarioDAO->atualizarSenha($usuario);
  
}
?>
