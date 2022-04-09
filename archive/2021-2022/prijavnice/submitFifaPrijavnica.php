<?php 
	
	require_once("../../../internal/sdpPrijave.php");
	
    $to = "prijave@eszs.si"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
	$from1 = "jaka.pregelj997@gmail.com";
    $first_name = $_POST['name'];
    $last_name = $_POST['surname'];
	$nickname = $_POST['nickname'];
	$discord = $_POST['discord'];
	$ekipa = $_POST['ekipa'];
	$drzavljanstvo = $_POST['drzavljanstvo'];
    $subject = "Prijava na SDP FIFA22";
    $subject2 = "Prijava na SDP FIFA22";
    $message = "Prijava na FIFA22:
	Ime: " . $first_name . "
	Priimek: " . $last_name . "
	PSN ID: " . $nickname . "
	Email: " . $from . "
	Discord: " . $discord . "
	Ekipa / društvo: " . $ekipa . "
	Državljanstvo: " . $drzavljanstvo;
    $message2 = "
	Spoštovani,\n
	vaša prijava na Slovensko državno prvenstvo v FIFA22 je bila uspešno izvedena.
	Za lažjo organizacijo vas prosimo, da se pridružite uradnemu EŠZS Discordu (https://discord.gg/kF4KkfKzuf) in si v strežniku ime spremenite v svoje ime in priimek.
	Spomniti Vas želimo tudi, da se morate kot pogoj za udeležbo Slovenskega državnega prvenstva včlaniti v eno od obstoječih društev, ki so člani E-športne zveze Slovenije.
	Prosimo vas, da preverite, ali so spodaj navedeni podatki pravilni in nas v primeru napake čim prej kontaktirate.\n
	" . $message . "\n
	Za dodatne informacije smo vam na voljo na info@eszs.si.";

    $headers = "From:" . $from . "\r\n";
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
	mail($from1,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	
	sdpPrijave::addPlayer($first_name, $last_name, $nickname, $from, $discord, $ekipa, $drzavljanstvo);
	
    echo "Prijava poslana. Hvala " . $first_name . ". Prosimo, da sledite nadaljnim navodilom, ki jih boste prejeli na e-mail.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    
?>

