<?php
/*

*/
class authUser_xamasti{
	public function __construct(){
	}
	public function login($user, $keyhash){
		$sql = queryDb('call sp_sel_user("'.$user.'", "'.$keyhash.'")');
		$dados = $sql->fetch(PDO::FETCH_ASSOC);
		$_SESSION["userId"] = $dados["id"];
	}
}
?>