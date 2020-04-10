<?php
	
	class dbconnect 
	{
		
		function connect()
		{
			$connection = mysqli_connect("localhost" , "root" , "" , "get_your_designer");
			return $connection;
		}

		
	}

	
?>