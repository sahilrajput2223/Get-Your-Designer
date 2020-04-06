<?php

	include 'DBconnection.php';
	include 'interface.php';

	class dao implements interface1
	{
		private $con;

		function __construct()
		{
			$db = new dbconnect();
			$this->con = $db->connect();
		}

		
		function select_all($table)
		{
			return mysqli_query($this->con , "SELECT * FROM $table");
		}

		function delete_designer_by_id($table, $where)
		{
			return mysqli_query($this->con , "DELETE FROM $table WHERE $where");
		}
		
		function insert($table,$value)
		{
			$field = "";
			$val = "";
			$i = 0;


			foreach ($value as $k => $v) 
			{
				$v = str_replace("'", "",$v);
					
				if ($i == 0) {
					$field .= $k;
					$val .= "'" . $v . "'"; 
				}
				else{
					$field .= ", " . $k;
					$val .= ", '" . $v . "'";
				}
				$i++;
			}

			return mysqli_query($this->con , "INSERT INTO $table($field) VALUES($val)") or die(mysqli_error($this->con));
		}
	}
?>