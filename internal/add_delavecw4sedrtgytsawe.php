<?php
    session_start();
    require_once("eszsDatabaseGoBrrr.php");
	
	$medijID = $_POST['medijID'];
	$tipID = $_POST['tipID'];
	$ime = $_POST['ime'];	
	$priimek = $_POST['priimek'];	
	$naziv = $_POST['naziv'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$odzivnost = $_POST['odzivnost'];
	 
	database::addDelavec($ime, $priimek, $naziv, $mail, $phone, $odzivnost, $medijID, $tipID);
	 
	header("Location: https://mischievousbazaar.com/eszsDatabase.php");
	exit();
 ?>