<?php
	session_start();
	$_SESSION['prijavljen'] = False;
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Prijava</title>
</head>
<body style="background-color: #192133;">
	<center><h1 style="padding-top: 60px; color: white;">Prijava</h1></center>
	<center>
		<form action="FilesWeDontNeedToTalkAbout/loggedin.php" method="POST">
			<div style="font-size: 20px; color: white;">Email: </div>
			<div><input type="text" name="email"/></div><br />
			<div style="font-size: 20px; color: white;">Password: </div>
			<div><input type="password" name="password"/></div><br />
			<div><input type="submit" name="submit" value="Login" style="background-color: white; color: #192133; padding: 10px; border: none;">
		</form>
	</center>
</body>
</html>