<?php

class delinquente 
/* 
criação : 24/10/2020
alteração : 25/10/2020
autor: daniel.santos.ap@gmail.com
delinquente : Classe responsavel por criar banco de dados e tabelas e ajudar na composição de consultas nos mesmos.
*/
	{
	public $cnx;
	public $query;
	public function __construct()
		{

		}
	public function table($name, $prefields=[], $extras="engine=innodb charset=utf8mb4")
	/*
	table : função responsavel por criar tabelas
	@name * : nome da tabela
	@prefields : colunas da tabela
	@extras : informações no final da tabela como engine e charset
	*/
		{
			$sql= "create table $name";
			$fields = '(';
			$cols = [];
			if(!is_array($prefields)){
				echo "É precisso que o 2º argumento seja um array!";
				exit;
			} else {
				foreach ($prefields as $key => $val)
				{
					array_push($cols, $key." ".$val, );
				};
				$fields .= implode(",", $cols);
				$fields .= ")" . $extras;
			};
			return $sql.$fields;
		}
	public function foreignkey($table)
		{
			$sql = "describe ". $table;
		}
	public function tablej($name, $prefields=[], $engine="engine=innodb charset=utf8mb4")
		{
			$sql= "create table $nome";
			$fields = '(';
			//$cols = [];
			foreach ($prefields as $key => $val)
			{
				$obj = json_decode($key, true);
				print_r($val);
			};
		}
	public function field($name, $typo, $size = '')
		{

		}
	public function database($name)
		{
			$sql = $this->query;
		}
	public function fechtall($table, $start=0, $end=10)
		{

		}
	public function fechtone($table, $id)
		{
			
		}
	public function fechtwhere($table, $condition)
		{
			
		}
	}
?>