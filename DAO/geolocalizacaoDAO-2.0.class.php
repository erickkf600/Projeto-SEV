<?php
class GeolocalizaDAO {

  private $conexao;

  public function __construct() {
    $this->con = new Conexao();
  }

  public function listarMunicipios($uf) {
    $mysql = "SELECT municipio FROM geolocalizacao WHERE uf = '$uf'";
    $res = mysqli_query($this->con->getCon(), $mysql);
    if(mysqli_num_rows($res)) {
      return $res;
    } else {
      return false;
    }
  }
}
?>
