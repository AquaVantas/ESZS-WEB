<?php 
	require_once("../../internal/websitedatabase.php");
	
    $playerNumber = $_POST['playerNumber'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$nickname = $_POST['nickname'];
	$datumRegistracije = $_POST['datumRegistracije'];
	$potekRegistracije = $_POST['potekRegistracije'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$postal = $_POST['postal'];
	$birth = $_POST['birth'];
	$game = $_POST['game'];
	$team = $_POST['team'];
	$org = $_POST['org'];
	
	if($_POST['clan'] == '1'){		
		$clan = 1;
	}else{
		$clan = 0;
	}
	
	$nationality = $_POST['nationality'];

	websitedatabase::addMember($playerNumber, $name, $surname, $nickname, $datumRegistracije, $potekRegistracije, $email, $phone, $street, $city, $postal, $birth, $clan);
		
	$igralecID;
	foreach(websitedatabase::getLastMember() as $last):
		$igralecID = $last['lastPlayer'];
	endforeach;
	
	websitedatabase::addPlayerToOrganization($igralecID, $org, $datumRegistracije);
	websitedatabase::addPlayerToTeam($igralecID, $team, $datumRegistracije);
	websitedatabase::addPlayerNationality($igralecID, $nationality);
	websitedatabase::addPlayerGame($igralecID, $game);
	
	
	header("Location: http://eszs.si/cpanel.php?action=4");
	
	
?>