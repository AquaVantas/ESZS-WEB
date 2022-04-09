<?php
    session_start();
    require_once("eszsDatabaseGoBrrr.php");
	 
	$ime = $_POST['ime'];
	 
	database::addMedij($ime);
	 
	header("Location: https://mischievousbazaar.com/eszsDatabase.php");
	exit();
 ?>