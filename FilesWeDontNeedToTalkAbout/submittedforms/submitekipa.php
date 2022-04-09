<?php 
	require_once("../../internal/websitedatabase.php");
	
    $teamname = $_POST['teamname'];
	$shortname = $_POST['shortname'];
	
    websitedatabase::addTeam($teamname, $shortname);
	
	header("Location: http://eszs.si/cpanel.php?action=5");
?>