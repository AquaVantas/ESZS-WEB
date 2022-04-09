<?php
    session_start();
    require_once("eszsDatabaseGoBrrr.php");
	 
	$ime = $_POST['imeTip'];
	 
	database::addTip($ime);
	 
	header("Location: https://mischievousbazaar.com/eszsDatabase.php");
	exit();
 ?>