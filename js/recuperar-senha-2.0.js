function consultarLembrete() {
  var email = document.forms['recuperar']['email'].value;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("caixa").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "processo-recuperar-senha-2.0.php?acao=lembrete&email=" + email, true);
  xmlhttp.send();
}

function enviarEmail(email) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("caixa").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "processo-recuperar-senha-2.0.php?acao=enviar&email=" + email, true);
  xmlhttp.send();
}

function atualizarSenha(dados) {
  var usr = split.dados("+");
  var senha = document.getElementById("senha").value;
  var senha2 = document.getElementById("senha2").value;
  if (senha == "") {
    document.getElementById("alertasenha").innerHTML = "Você precisa digitar uma nova senha";
  } else if(senha2 == "") {
    document.getElementById("alertasenha").innerHTML = "";
    document.getElementById("alertasenha2").innerHTML = "Você precisa redigitar sua nova senha";
  } else if (senha != "" && senha.length < 8) {
    document.getElementById("alertasenha").innerHTML = "Seria melhor você digitar uma senha mais segura com pelo menos 8 caracteres";
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("caixa").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "processo-recuperar-senha-2.0.php?acao=autualizar&usuario=" + usr[0] + "&controle="+usr[1], true);
    xmlhttp.send();
  }
}