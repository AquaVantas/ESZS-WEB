<?php
    session_start();
    require_once("eszsDatabaseGoBrrr.php");
	
	$ime = $_POST['ime'];	
	$priimek = $_POST['priimek'];	
	$vzdevek = $_POST['vzdevek'];
	$naslov = $_POST['naslov'];
	$ps = $_POST['ps'];
	$posta = $_POST['posta'];
	$datumRojstva = $_POST['datumRojstva'];
	$email = $_POST['email'];
	$telefon = $_POST['telefon'];
	$igre = $_POST['igre'];
	$ekipa = $_POST['ekipa'];
	 
	database::addDelavec($ime, $priimek, $naziv, $email, $phone, $odzivnost, $medijID, $tipID);
	 
	header("Location: https://mischievousbazaar.com/eszsDatabase.php");
	exit();
 ?>