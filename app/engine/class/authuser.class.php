<?php
	class authuser {
		public function __construct()
		{

		}
		public function colletdata($dados)
		{
			$_SESSION["userinfo"] = json_encode($dados);
			$_SESSION["LOGADO"] = TRUE;
		}

	}
?>