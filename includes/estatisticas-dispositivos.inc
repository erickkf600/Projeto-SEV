<?php
if (isset($_SESSION['estatisticas'])) {

} else {
  $_SESSION['estatisticas'] = "Sem registro";
}
  $estatisticas = $_SESSION['estatisticas'];

?>
