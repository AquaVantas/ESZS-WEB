<?php 
	
	require_once("../../../internal/sdpPrijave.php");
	
    $to = "prijave@eszs.si"; // this is your Email address
    $from = $_POST['captainemail']; // this is the sender's Email address
	$ekipa = $_POST['team'];
    $captain_first_name = $_POST['captainname'];
    $captain_last_name = $_POST['captainsurname'];
	$captaindiscord = $_POST['captaindiscord'];
	$captainnickname = $_POST['captainnickname'];
	$captaindrzavljanstvo = $_POST['captaindrzavljanstvo'];
	
	$player2_first_name = $_POST['player2name'];
    $player2_last_name = $_POST['player2surname'];
	$player2email = $_POST['player2email'];
	$player2discord = $_POST['player2discord'];
	$player2nickname = $_POST['player2nickname'];
	$player2drzavljanstvo = $_POST['player2drzavljanstvo'];
	
	$player3_first_name = $_POST['player3name'];
    $player3_last_name = $_POST['player3surname'];
	$player3email = $_POST['player3email'];
	$player3discord = $_POST['player3discord'];
	$player3nickname = $_POST['player3nickname'];
	$player3drzavljanstvo = $_POST['player3drzavljanstvo'];
	
	$player4_first_name = $_POST['player4name'];
    $player4_last_name = $_POST['player4surname'];
	$player4email = $_POST['player4email'];
	$player4discord = $_POST['player4discord'];
	$player4nickname = $_POST['player4nickname'];
	$player4drzavljanstvo = $_POST['player4drzavljanstvo'];
	
    $subject = "Prijava na SDP Rocket League";
    $subject2 = "Prijava na SDP Rocket League";
    $message = "Prijava na Rocket League:
	
	Ekipa: " . $ekipa . "
	
	Kapetan:
	Ime: " . $captain_first_name . "
	Priimek: " . $captain_last_name . "
	Email: " . $from . "
	Discord: " . $captaindiscord . "
	Vzdevek v igri: " . $captainnickname . "
	Državljanstvo: " . $captaindrzavljanstvo . "
	
	Igralec 2:
	Ime: " . $player2_first_name . "
	Priimek: " . $player2_last_name . "
	Email: " . $player2email . "
	Discord: " . $player2discord . "
	Vzdevek v igri: " . $player2nickname . "
	Državljanstvo: " . $player2drzavljanstvo . "
	
	Igralec 3:
	Ime: " . $player3_first_name . "
	Priimek: " . $player3_last_name . "
	Email: " . $player3email . "
	Discord: " . $player3discord . "
	Vzdevek v igri: " . $player3nickname . "
	Državljanstvo: " . $player3drzavljanstvo . "
	
	Igralec 4:
	Ime: " . $player4_first_name . "
	Priimek: " . $player4_last_name . "
	Email: " . $player4email . "
	Discord: " . $player4discord . "
	Vzdevek v igri: " . $player4nickname . "
	Državljanstvo: " . $player4drzavljanstvo;
	
    $messagekapetan = "
	Spoštovani,\n
	vaša prijava na Slovensko državno prvenstvo v Rocket League je bila uspešno izvedena.
	Za lažjo organizacijo vas prosimo, da se pridružite uradnemu EŠZS Discordu (https://discord.gg/ztMErXem).
	Prosimo vas, da preverite, ali so spodaj navedeni podatki pravilni in nas v primeru napake čim prej kontaktirajte.\n
	Ime: " . $captain_first_name . "
	Priimek: " . $captain_last_name . "
	Email: " . $from . "
	Discord: " . $captaindiscord . "
	Vzdevek v igri: " . $captainnickname . "
	Ekipa: " . $ekipa . "
	Državljanstvo: " . $captaindrzavljanstvo . "
	
	Za dodatne informacije smo vam na voljo na info@eszs.si ali na discord server pod #vprašanja.";
	
	$messageplayer2 = "
	Spoštovani,\n
	vaša prijava na Slovensko državno prvenstvo v Rocket League je bila uspešno izvedena.
	Za lažjo organizacijo vas prosimo, da se pridružite uradnemu EŠZS Discordu (https://discord.gg/ztMErXem).
	Prosimo vas, da preverite, ali so spodaj navedeni podatki pravilni in nas v primeru napake čim prej kontaktirajte.\n
	Ime: " . $player2_first_name . "
	Priimek: " . $player2_last_name . "
	Email: " . $player2email . "
	Discord: " . $player2discord . "
	Vzdevek v igri: " . $player2nickname . "
	Ekipa: " . $ekipa . "
	Državljanstvo: " . $player2drzavljanstvo . "
	
	Za dodatne informacije smo vam na voljo na info@eszs.si ali na discord server pod #vprašanja.";
	
	$messageplayer3 = "
	Spoštovani,\n
	vaša prijava na Slovensko državno prvenstvo v Rocket League je bila uspešno izvedena.
	Za lažjo organizacijo vas prosimo, da se pridružite uradnemu EŠZS Discordu (https://discord.gg/ztMErXem).
	Prosimo vas, da preverite, ali so spodaj navedeni podatki pravilni in nas v primeru napake čim prej kontaktirajte.\n
	Ime: " . $player3_first_name . "
	Priimek: " . $player3_last_name . "
	Email: " . $player3email . "
	Discord: " . $player3discord . "
	Vzdevek v igri: " . $player3nickname . "
	Ekipa: " . $ekipa . "
	Državljanstvo: " . $player3drzavljanstvo . "
	
	Za dodatne informacije smo vam na voljo na info@eszs.si ali na discord server pod #vprašanja.";
	
	$messageplayer4 = "
	Spoštovani,\n
	vaša prijava na Slovensko državno prvenstvo v Rocket League je bila uspešno izvedena.
	Za lažjo organizacijo vas prosimo, da se pridružite uradnemu EŠZS Discordu (https://discord.gg/ztMErXem).
	Prosimo vas, da preverite, ali so spodaj navedeni podatki pravilni in nas v primeru napake čim prej kontaktirajte.\n
	Ime: " . $player4_first_name . "
	Priimek: " . $player4_last_name . "
	Email: " . $player4email . "
	Discord: " . $player4discord . "
	Vzdevek v igri: " . $player4nickname . "
	Ekipa: " . $ekipa . "
	Državljanstvo: " . $player4drzavljanstvo . "
	
	Za dodatne informacije smo vam na voljo na info@eszs.si ali na discord server pod #vprašanja.";

    $headers = "From:" . $from . "\r\n";
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$messagekapetan,$headers2); // sends a copy of the message to the sender
	mail($player2email,$subject2,$messageplayer2,$headers2); // sends a copy of the message to the sender
	mail($player3email,$subject2,$messageplayer3,$headers2); // sends a copy of the message to the sender
	
	sdpPrijave::addPlayerRL($captain_first_name, $captain_last_name, $from, $captaindiscord, $captainnickname, $captaindrzavljanstvo, $ekipa);
	sdpPrijave::addPlayerRL($player2_first_name, $player2_last_name, $player2email, $player2discord, $player2nickname, $player2drzavljanstvo, $ekipa);
	sdpPrijave::addPlayerRL($player3_first_name, $player3_last_name, $player3email, $player3discord, $player3nickname, $player3drzavljanstvo, $ekipa);
	if(!empty($player4_first_name)){	
		echo "Se izvede";
		mail($player4email,$subject2,$messageplayer4,$headers2); // sends a copy of the message to the sender
		sdpPrijave::addPlayerRL($player4_first_name, $player4_last_name, $player4email, $player4discord, $player4nickname, $player4drzavljanstvo, $ekipa);
	}
	
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    
?>

<!DOCTYPE html>
<html style="min-height: 100%;">
	<head>
		<title>E-športna zveza Slovenije</title>
		<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600;700&display=swap" as="style">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="/../../../jquery.fancybox.min.css">
		<link rel="stylesheet" href="/../../../bootstrap.min.css">
		<link rel="icon" href="/../../../images/eszs_simbol_moder.png">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/../../../style.css">
		
	</head>
	<body style="height: 100%">
		<div class="container my-4">
			<div class="d-flex align-items-center justify-content-center" style="position:absolute; top:0; bottom:0; left:0; right:0; color: #ecb100; font-size: 30px;">			
				<?php echo "Prijava poslana. Hvala, " . $captain_first_name . ". Prosimo, da sledite nadaljnim navodilom, ki jih boste prejeli na e-mail."; ?>
			</div>
		</div>
		
	</body>
</html>


