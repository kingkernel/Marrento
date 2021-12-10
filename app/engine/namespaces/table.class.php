<?php
class table{
	public $top;
	public $rowstable;
	public function __construct(){

	}
	public function headers($string, $class = ""){
		$this->top = '<tr>';
		$classe = $class;
		foreach ($string as $value) {
			$this->top .= '<th '.$classe.'>'.$value.'</th>';
		}
		$this->top .= "</tr>";
		return $this->top;
	}
	public function rows($sqlString = []){
		foreach ($sqlString as $value) {
			$this->rowstable.= '<tr>'.$value.'</tr>';
		};
		//$sql = queryDb($sqlString);
		//while ($query = $sql->fetch(PDO::FETCH_ASSOC)) {
		//	$this->rowstable .='<tr><td>'.$query["nameperson"].'</td><td>'.$query["prob"].'</td><td>'.$query["estatus"].'</td></tr>';
		//};
		return $this->rowstable;
	}
	public function html(){
		$this->content = '<table class="table table-striped"><thead>';
	    $this->content .= $this->top;
	    $this->content .='</thead>';
		$this->content .= $this->rowstable;
    	$this->content .='</table>';
    return $this->content;
	}
}
?>