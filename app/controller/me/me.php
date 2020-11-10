<?php
    class me extends page
    {
        public function index()
        {
           if(isset($_SESSION["LOGADO"]))
           {
           	echo "logado";
           } else {
           	echo "deslogado";
           }
        }
    }
?>