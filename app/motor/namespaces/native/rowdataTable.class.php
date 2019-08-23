<?php
/*
Data Criação: 03/03/2018
*/
class rowDataTable{
	public $dataSet;
	public $addContent = '';
	public function __construct(){

	}
	public function html(){
		$query = retornadbinfo($this->dataSet);
		while ($data = $query->fetch(PDO::FETCH_ASSOC)){
			$keys = array_keys($data);
			$linha = '<tr class="danger"><td>';
			$linha .= implode('</td><td>', $keys);
			$linha .= '</td></tr>';
			$this->addContent .= "<tr><td>";
			$this->addContent .= implode('</td><td>', $data);
			$this->addContent .= '</td></tr>';
		};
		$this->addContent = $linha.$this->addContent;
		return $this->addContent;
	}
}
?>