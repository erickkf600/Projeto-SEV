function formCadastro() {
  var valorNome = document.forms["cadastro"]["nome"].value;
  var valorSobreNome = document.forms["cadastro"]["sobrenome"].value;
  if (valorNome == "") {
    document.getElementById("faltanome").innerHTML = "Você esqueceu de nos fornecer o seu nome";
    return false;
  } else if (valorSobreNome == "") {
    document.getElementById("faltanome").innerHTML = "";
    document.getElementById("faltasobrenome").innerHTML = "Você esqueceu de nos fornecer o seu sobrenome";
    return false;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var resposta = this.responseText;
        var dados = resposta.split("+");
        document.getElementById("cadastro").value = dados[0];
        document.getElementById("legenda-usuario").innerHTML = dados[1];
        document.getElementById("formulario-cadastro").style.display = "none";
        document.getElementById("formulario-usuario").style.display = "block";
      }
    };
    xmlhttp.open("GET", "processo-registrar-cadastro-2.0.php?nome=" + valorNome + "&sobrenome=" +valorSobreNome, true);
    xmlhttp.send();
    return false;
  }
}

function consultarUsuario(email) {
  if(email == "") {

  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("erro-email").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "processo-consultar-usuario-2.0.class.php?acao=consultar_email&email=" + email, true);
    xmlhttp.send();
  }
}

function registrarUsuario() {
  var cadastro = document.getElementById("cadastro").value;
  var email = document.getElementById("email").value;
  var erroEmail = document.getElementById("erro-email").innerHTML;
  var senha = document.getElementById("senha").value;
  var lembrete = document.getElementById("lembretesenha").value;
  var seguranca = document.getElementById("fraseseguranca").value;

  if(email == "") {
    document.getElementById("erro-email").innerHTML = "Você precisa informar um e-mail";
  } else if (erroEmail == "Este e-mail já está cadastrado.") {
  alert("Este email já está cadastrado no sistema");
  } else if (senha == "") {
    document.getElementById("erro-email").innerHTML = "";
    document.getElementById("faltasenha").innerHTML = "Você esqueceu de nos fornecer uma senha";
  } else if (lembrete == "") {
    document.getElementById("erro-email").innerHTML = "";
    document.getElementById("faltasenha").innerHTML = "";
    document.getElementById("faltalembretesenha").innerHTML = "Você precisa de um lembrete de senha";
  } else if (seguranca == "") {
    document.getElementById("erro-email").innerHTML = "";
    document.getElementById("faltasenha").innerHTML = "";
    document.getElementById("faltalembretesenha").innerHTML = "";
    document.getElementById("faltafraseseguranca").innerHTML = "Você precisa de uma frase de segurança para validar suas requisições.";
  } else {
    document.getElementById("legenda-usuario").innerHTML = "Seu usuário está sendo cadastrado, Aguarde um momento...";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var resp = this.responseText;
        var dado = resp.split("+");
        document.getElementById("legenda-usuario").innerHTML = dado[2];
        setTimeout(window.location.href=dado[1], 4000);
      }
    };
    xmlhttp.open("GET", "processo-registrar-usuario-2.0.php?cadastro="+cadastro+"&email="+email+"&senha="+senha+"&lembrete="+lembrete+"&frase="+seguranca, true);
    xmlhttp.send();
  }
  return false;
}