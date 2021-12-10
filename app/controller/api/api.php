<?php
	class api extends page
	{
		public function __construct()
		{

		}
		public function connect()
		{

		}
		public function convert()
		{

		}
		public function index()
		{
			$sql = 'select * from tbl_wishes';
			$query = queryDb($sql);
			$data = [];
			while($dados = $query->fetch(PDO::FETCH_ASSOC)){
			echo json_encode($dados);
			}
		}
	}
?>