<?php
/*

*/
class authUser_xamasti{

	public function __construct($user, $keyhash){
		$sql = queryDb('call sp_add_teccalled("'.$user.'", "'.$keyhash.'")');
		echo $sql;
		return $sql;
	}
	public function login(){
		echo $sql;
	}
}
?>