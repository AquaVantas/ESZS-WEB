<?php 
	require_once("../../internal/websitedatabase.php");
	
    $orgname = $_POST['orgname'];
	
    websitedatabase::addOrganization($orgname);
	
	header("Location: http://eszs.si/cpanel.php?action=6");
?>



