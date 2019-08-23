<?php
class googleMaps {
  /*
  Data criação: 18/01/2018
  Última alteração:
  */
	public $userKey;				          // chave de utilização do google Maps
  public $styleHeight =  "500";     // Altura em px do bloco onde aparecerá o mapa
  public $idMap = "mapa";           // id do container do que vai conter o mapa
  public $latitude = "-14.235004";  // Latitude inicial       ---|
                                    //                           |-- meio do Brasil
  public $longitude = "-51.92528";  // Longitude inicial      ---|
  public $funcName = "initMap";     // Nome da função que será inscrita em Javascript
  public $zoom = "5";               // Zoom inicial do mapa
  public $mapName = "screen";       // Nome da variável que será o mapa na memória
  public $points = [];
	public function __construct(){

	}
	public function render(){

	$mapa = '<div id="'.$this->idMap.'" style="height: '.$this->styleHeight.'px;"></div><script>var '.$this->idMap.';
  function '.$this->funcName.'(){
    '.$this->mapName.' = new google.maps.Map(document.getElementById(\''.$this->idMap.'\'), {center: {lat: '.$this->latitude.', lng: '.$this->longitude.'},
      zoom: '.$this->zoom.', disableDefaultUI: true, zoomControl: true});';
      foreach ($this->points as $key => $value){$mapa .= $value->render();};
  $mapa .='};</script><script src="https://maps.googleapis.com/maps/api/js?key='.$this->userKey.'&callback='.$this->funcName.'&language=PT-BR&region=BR" async defer></script>';
	return $mapa;	
	}
}
class googleMarker {
  /*
  Data Criação: 18/01/2018
  */
  public $userKey;
  public $latitude = "-14.235004";                                  // ponto no mapa: latitude
  public $longitude = "-51.92528";                                  // ponto no mapa: longitude
  public $setMap = "screen";                                        // mapa que será colocado os pontos
  public $title = "Brasil!";                                        // titulo [alt] do ponto
  public $icon = '/public/images/syspng/chicken.png';               // url da imagem a ser utilizada
  public function __construct(){

  }
  public function render(){
  $this->somacontent = 'var marker = new google.maps.Marker({
          position: {lat: '.$this->latitude.', lng: '.$this->longitude.'},
          title: \'Brasil!\',
          map: '.$this->setMap.',
          icon: "'.$this->icon.'"
        });';
  return $this->somacontent;
  }
  public function mountAdress($adress = []){
    $urlStar = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
    $glue = implode("+", $adress);
    $result = str_replace(" ", "+", $glue);
    $endUrl = $urlStar.$result.'&key='.$this->userKey;
    return $endUrl;
  }
  public function returnCords ($endereco){
      $url = curl_init();
      curl_setopt($url, CURLOPT_URL, $endereco);
      curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
      $retorno = json_decode(curl_exec($url), true);

      $lat = $retorno["results"]["0"]["geometry"]["location"]["lat"];
      $lng = $retorno["results"]["0"]["geometry"]["location"]["lng"];

      $cordenadas = [];
      $cordenadas["lat"] = $lat;
      $cordenadas["lng"] = $lng;
      return $cordenadas;
      curl_close($url);
    }
}
?>