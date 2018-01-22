
function registrarNavegacao() {
  var estatisticas = "<?php echo $_SESSION['estatisticas']; ?>";
  if (estatisticas == "Sem registro") {
    //Tamanho da tela do nevegador
    var w = window.innerWidth;
    var h = window.innerHeight;
    var x = document.getElementById("demo");
    x.innerHTML = "Browser inner window width: " + w + ", height: " + h + ".<br>"+screen.width+"X"+screen.height+"<br>"+navigator.appName+"<br>"+navigator.appCodeName+"<br>"+navigator.product+"<br>"+navigator.appVersion+"<br>"+navigator.userAgent+"<br>"+navigator.platform;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
      }
    };
    xmlhttp.open("GET", "estatisticas-dispositivo.class.php", true);
    xmlhttp.send();
  } else {
    alert(estatisticas);
  }
}
