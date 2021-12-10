<?php
/**
data de criação: 31/05/2018
Autor: daniel.santos.ap@gmail.com
Ultima Alteração: 31/05/2018
**/
class firebase {
	public $apikey;
	public $authDomain;
	public $databaseURL;
	public $projectId;
	public $storageBucket;
	public $messagingSenderId;

	public function __construct(){

	}
	public function prepare(){
		echo '<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
		<script>
	var config = {
    apiKey: "'.$this->apikey.'",
    authDomain: "'.$this->authDomain.'",
    databaseURL: "'.$this->databaseURL.'",
    projectId: "'.$this->projectId.'",
    storageBucket: "'.$this->storageBucket.'",
    messagingSenderId: "'.$this->messagingSenderId.'"
  	};
  	firebase.initializeApp(config);
	</script>';
	}
}
/*

<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyD6w-Du6m9qyPO7XguhPFlsmJ5CskRhQPs",
    authDomain: "deathpoverty.firebaseapp.com",
    databaseURL: "https://deathpoverty.firebaseio.com",
    projectId: "deathpoverty",
    storageBucket: "deathpoverty.appspot.com",
    messagingSenderId: "798420553143"
  };
  firebase.initializeApp(config);
</script>
*/
?>
