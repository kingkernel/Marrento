<?php
class formInputsDb{
/**

**/
	public loadtabletoinput($table){
		$sql = "describe " .$table ;
		echo $sql;
	}
}

?>