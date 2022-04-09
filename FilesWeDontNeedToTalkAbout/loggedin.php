<?php
    session_start();
    require_once("../internal/websitedatabase.php");
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$passwordcheck = 0;
	
	$adminID;
	
	foreach (websiteDatabase::getAllAdmins() as $delavec): 
		if ($email == $delavec['email']){
			$passwordcheck = $delavec['password'];
			$adminID = $delavec['adminID'];
		}
	endforeach;
	
	$passCheck = password_verify($password, $passwordcheck);
	
	if($passCheck == true){			 
		$_SESSION['prijavljen'] = True;
		$_SESSION['admin'] = False;
		$_SESSION['webdev'] = False;		
		$_SESSION['socials'] = False;
		$_SESSION['marketing'] = False;
		$_SESSION['pr'] = False;
		$_SESSION['tekmovanja'] = False;
		$_SESSION['eventi'] = False;
		
		foreach(websiteDatabase::getAllPermissions() as $permissions):
			if($adminID==$permissions['adminID']){
				if($permissions['permissionID']==1){					
					$_SESSION['admin'] = True;
				}
				if($permissions['permissionID']==2){					
					$_SESSION['webdev'] = True;
				}
				if($permissions['permissionID']==3){					
					$_SESSION['socials'] = True;
				}
				if($permissions['permissionID']==4){					
					$_SESSION['marketing'] = True;
				}
				if($permissions['permissionID']==5){					
					$_SESSION['pr'] = True;
				}
				if($permissions['permissionID']==6){					
					$_SESSION['tekmovanja'] = True;
				}
				if($permissions['permissionID']==7){					
					$_SESSION['eventi'] = True;
				}
			}
		endforeach;
		
		header("Location: http://eszs.si/cpanel.php");		
		exit();
		echo $password;
	}
	else {		
		$_SESSION['prijavljen'] = False;
		echo $password;
		echo $passwordcheck;
		echo "         ";
		echo $hashPass;
		exit();
		echo $email;
	}
	
	exit();
 ?>