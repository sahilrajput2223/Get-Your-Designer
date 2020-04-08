<?php 
	session_start();
	if ($_SESSION['admin'] != 'Admin')
	{
		header("Location:login.php");
	}
	header("Location:add_designer.php");
	
?>	