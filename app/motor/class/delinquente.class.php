<?php

class delinquente 
	{

	public function __construct
		{

		}
	public function foreignkey($table)
		{
			$sql = "describe ". $table;
		}

	}