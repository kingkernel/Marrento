<?php
    class me extends page
    {
        public function index()
        {
           if(isset($_SESSION["LOGADO"]))
           {
           	$this->loadview("templates.outhers.user_profile");
           } else {
           	echo "deslogado";
           }
        }
    }
?>