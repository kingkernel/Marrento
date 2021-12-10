<?php
/* ############################################################################
* 	class: route.class.php
*	create: 13/01/2020
*	autor: daniel.santos.ap@gmail.com
*	modificação:
*/ ############################################################################
	class route
	{
		public function __construct()
		{

		}
		public function caseroute($method, $route)
		{
			if($method == "GET")
			{
				echo "foi get!";
			}
			else
			{
				echo "outro methodo!";
			}
		}
	}
?>