<?php
    session_start();
    require_once("../internal/websitedatabase.php");
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$ime = $_POST['name'];
	$priimek = $_POST['surname'];
	
	if($password == $repassword){
		$hashPass = password_hash($password, PASSWORD_DEFAULT);
		websiteDatabase::addAdmin($email, $hashPass, $ime, $priimek);		 
		header("Location: https://eszs.si/");		
		exit();
	}
	else {
		?>
		<html>
			<body>
				FAILED!
			</body>
		</html>
		
	<?php
		echo $password;
		echo $repassword;
	}
	
	exit();
 ?>