<?php
class Geolocaliza {
  private $id;
  private $latitude;
  private $longitude;
  private $municipio;
  private $uf;

  public function __construct() {

  }

  public function getId() {
    return $this->id;
  }

  public function setId($vlr) {
    $this->id = $vlr;
  }

  public function getLatitude() {
    return $this->latitude;
  }

  public function setLatitude($vlr) {
    $this->latitude = $vlr;
  }

  public function getLongitude() {
    return $this->longitude;
  }

  public function setLongitude($vlr) {
    $this->longitude = $vlr;
  }

  public function getMunicipio() {
    return $this->municipio;
  }

  public function setMunicipio($vlr) {
    $this->municipio = $vlr;
  }

  public function getUf() {
    return $this->uf;
  }

  public function setUf($vlr) {
    $this->uf = $vlr;
  }
}
?>
