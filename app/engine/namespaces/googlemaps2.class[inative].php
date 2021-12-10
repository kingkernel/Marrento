<?php
/*
Data de criação: 07/03/2018
Ultima Alteração: 08/03/2018
*/
class googlemaps2{
	public $key = 'AIzaSyD5PEcj6kLmlUT7tugLOy9wGygX_ptWGUY';
	public $divId = "map";
	public $functionName = 'initMap';
	public $mapcenter = ["lat"=>"0.0331833", "lng"=> "-51.0592348"];
	public $zoom = 12;
	public $mapName = 'map';
	public $pointsMap = [];
	public $js;
	public $scriptInclude;
	public function __construct(){
		
	}
	public function html_old(){
		$this->addContent = '<div id="'.$this->divId.'" style="height: 100%">hum</div>';
		echo $this->addContent;
	}
	public function js(){
		$this->js = 'function '.$this->functionName.'() {var '.$this->mapName.' = new google.maps.Map(document.getElementById("'.$this->divId.'"), {center: {lat: '.$this->mapcenter["lat"].', lng: '.$this->mapcenter["lng"].'}, zoom: '.$this->zoom.'});';
		if(isset($this->pointsMap)){
			$num = 1;
			foreach ($this->pointsMap as $key => $value) {
				$value->mapContainer = $this->mapName;
				$this->js .= $value->html($num);
				$num++;
			};
		};
	$this->js .= '};';
		return $this->js;
	}
	public function headerScript(){
		$this->scriptInclude = '<script src="https://maps.googleapis.com/maps/api/js?key='.$this->key.'&callback='.$this->functionName.'" async defer></script>';
		return $this->scriptInclude;
	}
	public function html(){
		$this->addContent = '<style>#'.$this->divId.' {height: 100%;} html, body { height: 100%; margin: 0; padding: 0;}</style><div id="'.$this->divId.'"></div><script>function '.$this->functionName.'() {var '.$this->mapName.' = new google.maps.Map(document.getElementById("'.$this->divId.'"), {center: {lat: '.$this->mapcenter["lat"].', lng: '.$this->mapcenter["lng"].'}, zoom: '.$this->zoom.' });';
		if(isset($this->pointsMap)){
			$num = 1;
			foreach ($this->pointsMap as $key => $value) {
				$this->addContent .= $value->html($num);
				$num++;
			};
		};
		$this->addContent .= '};</script><script src="https://maps.googleapis.com/maps/api/js?key='.$this->key.'&callback='.$this->functionName.'" async defer></script>';
    return $this->addContent;
	}
}
class pointsMap {
	/*
	Data criação: 08/03/2018
	*/
	public $addContent;
	public $cords = [];							// lat: e lng
	public $mapContainer;						// nome do mapa que vai conter os pontos
	public $markerName = "marker";
	public $urlLink;
	public $adressString;
	public $key;
	public $json;
	public $locationArray;

	public function __construct($key){
		$this->key = $key;
	}
	public function compactArray($adress){
		if(is_array($adress)){
			$this->adressString = implode(' ', $adress);
			$this->adressString = urlencode($adress);
		} else {
			$this->adressString = urlencode($adress);
		}
	$this->adressConvert();
	return $this->adressString;
	}
	public function adressConvert(){
		//$adress = "avenida coaraci nunes, 922 centro Macapá-AP Brazil";
		$inicio = 'https://maps.googleapis.com/maps/api/geocode/json?address=';
		$fim = '&key='.$this->key;
		$this->urlLink = $inicio.urlencode($this->adressString).$fim;
		return $this->urlLink;
	}
	public function geoData(){
		$cURL = curl_init($this->urlLink);
		curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
		$this->json = curl_exec($cURL);
		$this->locationArray = json_decode($this->json, true);
			if ($this->locationArray["status"]=="OK"){
				$this->cords = $this->locationArray["results"][0]["geometry"]["location"];
			};
		curl_close($cURL);
	}
		public function html($num){
		$this->addContent = 'var cords'.$num.' = {lat: '.$this->cords["lat"].', lng: '.$this->cords["lng"].'}; var '.$this->markerName.' = new google.maps.Marker({position: cords'.$num.', map: '.$this->mapContainer.'});';
		return $this->addContent;
	}
}
?>
