function abrirMenuUsuario() {
  $("../login-usuario-2.0.php").slideToggle("slow");
}

function controlePreenchimento() {
  var email = document.forms['acesso-conta']['email'].value;
  var senha = document.forms['acesso-conta']['senha'].value;
  if(email == ""){
    document.getElementById("lembrete-email").innerHTML = "<font style='color:orangered;'>Você precisa digitar o seu e-mail</font>";
    return false;
  } else if (senha == "") {
    document.getElementById("lembrete-email").innerHTML = "";
    document.getElementById("lembrete-senha").innerHTML = "<font style='color:orangered;'>Não esqueça da sua senha</font>";
    return false;
  } else {

  }
}
