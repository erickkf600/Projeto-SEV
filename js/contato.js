function abrirFomContact() {
  $("../contato.php").slideToggle("slow");
}

function controlePreenchimento() {
  var nome = document.forms['contato']['nome'].value;
  var email = document.forms['contato']['email'].value;
  var motivo = document.forms['contato']['motivo'].value;
  if(nome == ""){
      document.getElementById("faltanome").innerHTML = "<font style='color:orangered;'>Por favor digite seu nome</font>";
    return false;
  } else if (email == "") {
      document.getElementById("faltanome").innerHTML = "";
      document.getElementById("faltaemail").innerHTML = "<font style='color:orangered;'>Acho que esta faltando o seu email</font>";
    return false;
  } else (motivo == "") { 
      document.getElementById("faltanome").innerHTML = "";
      document.getElementById("faltaemail").innerHTML = "";
      document.getElementById("faltamotivo").innerHTML = "<font style='color:orangered;'>Por favor nos infprme o motivo do seu contato</font>";
    return false;
  }
}