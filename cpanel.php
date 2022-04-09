<?php
	session_start();
	require_once("internal/news_db.php");
	require_once("internal/websitedatabase.php");
	require_once("internal/news_db_admin.php");
	
	$action = $_GET['action'];	
	
	$article_id = $_GET['article_id'];
	$articledelete = $_GET['delete'];
	$admin = False;
	$webdev = False;
	$socials = False;
	$marketing = False;
	$pr = False;
	$tekmovanja = False;
	$eventi = False;
	
	if($_SESSION['admin'] == True){
		$admin = True;
	}
	if($_SESSION['webdev'] == True){
		$webdev = True;
	}
	if($_SESSION['socials'] == True){
		$socials = True;
	}
	if($_SESSION['prijavljen'] == True){
		?> 
	
		
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.min.css">
		<meta charset="UTF-8">
		<?php if($action==1 || $action==2) {
			?>
		 <link rel="stylesheet" href="quill.snow.css" />
		<style>
				#container {
					position: relative;
					max-width: 50%;
					min-width: 768px;
				}
				#editor-container {
					height: 50em;
				}
				#editor-toolbar {
					z-index: 10000;
					user-select: none;
					-moz-user-select: none;
					-webkit-user-select: none;
					-ms-user-select: none;
				}
				.ql-editor {
					color:white;
				}
        </style><?php } ?>
	</head>
		<nav class="navbar navbar-expand-lg" style="position: absolute; top: 0; left: 0;">
			<a class="navbar-brand" href="cpanel.php">EŠZS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<?php
						if($admin==True || $webdev==True){
					?>
					<li class="nav-item active">
						<a class="nav-link" href="cpanel.php?action=3">Uredi strani<span class="sr-only">(current)</span></a>
					</li>
					<?php
						}
						if($admin==True || $socials==True){
					?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Novice   
						</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="cpanel.php?action=1">Dodaj Novico</a></li>
								<li><a class="dropdown-item" href="cpanel.php?action=2">Uredi novice</a></li>
							</ul>
					</li>
					<?php
						}
						if($admin==True){
					?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Seznam članov  
						</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="cpanel.php?action=4">Dodaj igralca</a></li>
								<li><a class="dropdown-item" href="cpanel.php?action=5">Dodaj ekipo</a></li>
								<li><a class="dropdown-item" href="cpanel.php?action=6">Dodaj organizacijo</a></li>
							</ul>
					</li>
					<?php
						}
					?>
					
    </ul>
	
  </div>
</nav><div>
		<?php if($action==1) {
			include "cpaneleditor.php";
		}
		if($action==2 && $article_id==0 && ($admin==True || $socials==True)){?>
			<br><br><br><table>
				<tr>
					<td>Naslov novice</td><td>Uredi</td><td>Izbriši</td>
				</tr>
				<?php foreach (news_db::getArticlesPreviews() as $novica): ?>
				<tr>					
					<td><?= $novica["news_article_title"] ?></td><td><a href="cpanel.php?action=2&article_id=<?=$novica["news_article_id"]?>">Edit</a></td><td><a href="cpanel.php?action=2&article_id=<?=$novica["news_article_id"]?>&delete=1">X</a></td>
				</tr><?php endforeach; ?>
			</table>
		<?php }
		if($action==2 && $article_id!=0 && $articledelete==0 && ($admin==True || $socials==True)) {			
			include "cpaneleditor.php";
		}
		if($action==2 && $article_id!=0 && $articledelete==1 && ($admin==True || $socials==True)) {	
			?><br><br><br><br>Ste prepričani, da želite izbrisati to objavo?<br>
			<input type="button" value="Izbriši!" name="submit" onclick="getRidOfIt()"><?php
		}
		if($action==3 && $article_id==0 && ($admin==True || $webdev==True)) {
			?><br><br><br><table>
				<tr>
					<td>Naslov novice</td><td>Uredi</td><td>Izbriši</td>
				</tr>
				<?php foreach (news_db::getPagesPreviews() as $stran): ?>
				<tr>					
					<td><?= $stran["news_page_title"] ?></td><td><a href="cpanel.php?action=2&article_id=<?=$stran["news_article_id"]?>">Edit</a></td>
				</tr><?php endforeach; ?>
			</table><?php
		}
		if($action==4 && ($admin==True)) {
			?><br><br><br>
			<form method="post" action="FilesWeDontNeedToTalkAbout/submittedforms/submitclan.php" style="margin-left: 50px;">
				<label for="playerNumber">St. igralca: <span style="color: red;">*</span></label><br>
				<input type="number" id="playerNumber" name="playerNumber" placeholder="6664206918" required><br>
				<label for="name">Ime: <span style="color: red;">*</span></label><br>
				<input type="text" id="name" name="name" placeholder="Janez" required><br>
				<label for="surname">Priimek: <span style="color: red;">*</span></label><br>
				<input type="text" id="surname" name="surname" placeholder="Novak" required><br>
				<label for="nickname">Vzdevek: <span style="color: red;">*</span></label><br>
				<input type="text" id="nickname" name="nickname" placeholder="janci_na_balanci" required><br>
				<label for="datumRegistracije">Datum registracije: <span style="color: red;">*</span></label><br>
				<input type="date" id="datumRegistracije" name="datumRegistracije" required><br>
				<label for="potekRegistracije">Potek registracije: <span style="color: red;">*</span></label><br>
				<input type="date" id="potekRegistracije" name="potekRegistracije" required><br>
				<label for="email">Email: <span style="color: red;">*</span></label><br>
				<input type="text" id="email" name="email" placeholder="janko.bananko@gmail.com" required><br>
				<label for="phone">Tel. številka: <span style="color: red;">*</span></label><br>
				<input type="text" id="phone" name="phone" placeholder="040/420-690" required><br>
				<label for="street">Ulica: <span style="color: red;">*</span></label><br>
				<input type="text" id="street" name="street" placeholder="Vukojebina 3" required><br>
				<label for="city">Kraj: <span style="color: red;">*</span></label><br>
				<input type="text" id="city" name="city" placeholder="Velenje" required><br>
				<label for="postal">Poštna št.: <span style="color: red;">*</span></label><br>
				<input type="text" id="postal" name="postal" placeholder="3320" required><br>
				<label for="birth">Datum rojstva: <span style="color: red;">*</span></label><br>
				<input type="date" id="birth" name="birth"><br>
				<label for="game">Igra: <span style="color: red;">*</span></label><br>
				<select id="game" name="game" required>
					<?php foreach(websitedatabase::getAllGames() as $igra): ?>
					
					<option value="<?= $igra['igraID'] ?>"><?= $igra['naziv'] ?></option>
					<?php endforeach; ?>
				</select><br>
				<label for="team">Ekipa: <span style="color: red;">*</span></label><br>
				<select id="team" name="team" required>
					<?php foreach(websitedatabase::getAllTeams() as $ekipa): ?>
					
					<option value="<?= $ekipa['ekipaID'] ?>"><?= $ekipa['naziv'] ?></option>
					<?php endforeach; ?>
				</select><br>
				<label for="org">Organizacija: <span style="color: red;">*</span></label><br>
				<select id="org" name="org" required>
					<?php foreach(websitedatabase::getAllOrganizations() as $org): ?>
					
					<option value="<?= $org['organizacijaID'] ?>"><?= $org['naziv'] ?></option>
					<?php endforeach; ?>
				</select><br>
				<label for="clan">Član: </label><br>
				<input type="checkbox" id="clan" name="clan" value="1"><br>
				<label for="nationality">Drzavljanstvo: <span style="color: red;">*</span></label><br>
				<select id="nationality" name="nationality" required>
					<?php foreach(websitedatabase::getAllNationalities() as $nat): ?>
					
					<option value="<?= $nat['drzavljanstvoID'] ?>"><?= $nat['naziv'] ?></option>
					<?php endforeach; ?>
				</select><br><br>
				<input id="submitButton" type="submit" value="DODAJ">
			</form><br><br>
			<table style="margin-left: 50px;">
				<tr>
					<td style="padding-left: 10px; padding-right: 10px;">ID IGRALCA</td>
					<td style="padding-left: 10px; padding-right: 10px;">ST. IGRALCA</td>
					<td style="padding-left: 10px; padding-right: 10px;">IME</td>
					<td style="padding-left: 10px; padding-right: 10px;">PRIIMEK</td>
					<td style="padding-left: 10px; padding-right: 10px;">VZDEVEK</td>
					<td style="padding-left: 10px; padding-right: 10px;">DATUM REGISTRACIJE</td>
					<td style="padding-left: 10px; padding-right: 10px;">POTEK REGISTRACIJE</td>					
					<td style="padding-left: 10px; padding-right: 10px;">EMAIL</td>					
					<td style="padding-left: 10px; padding-right: 10px;">PHONE</td>					
					<td style="padding-left: 10px; padding-right: 10px;">ULICA</td>					
					<td style="padding-left: 10px; padding-right: 10px;">KRAJ</td>					
					<td style="padding-left: 10px; padding-right: 10px;">POSTA</td>				
					<td style="padding-left: 10px; padding-right: 10px;">DATUM ROJSTVA</td>				
					<td style="padding-left: 10px; padding-right: 10px;">IGRA</td>			
					<td style="padding-left: 10px; padding-right: 10px;">EKIPA</td>			
					<td style="padding-left: 10px; padding-right: 10px;">OKRAJSAVA</td>			
					<td style="padding-left: 10px; padding-right: 10px;">ORGANIZACIJA</td>			
					<td style="padding-left: 10px; padding-right: 10px;">ČLAN</td>			
					<td style="padding-left: 10px; padding-right: 10px;">DRŽAVLJANSTVO</td>
				</tr>
				<?php foreach (websitedatabase::getAllMembers() as $igralec): ?>
				<tr>					
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["igralecID"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["stIgralca"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["ime"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["priimek"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["vzdevek"] ?></td>					
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["datumRegistracije"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["potekRegistracije"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["email"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["phone"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["ulica"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["kraj"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["posta"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["datumRojstva"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["igra"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["ekipa"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["ekipaOkrajsava"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["organizacija"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["clan"] ?></td>
					<td style="padding-left: 10px; padding-right: 10px;"><?= $igralec["drzavljanstvo"] ?></td>
				</tr><?php endforeach; ?>
			</table><?php
		}
		if($action==5 && ($admin==True)) {
			?><br><br><br>
			<form method="post" action="FilesWeDontNeedToTalkAbout/submittedforms/submitekipa.php" style="margin-left: 50px;">
				<label for="teamname">Ime ekipe: <span style="color: red;">*</span></label><br>
				<input type="text" id="teamname" name="teamname" placeholder="BestProgrammerSLO" required><br>
				<label for="shortname">Okrajšava: </label><br>
				<input type="text" id="shortname" name="shortname" placeholder="BPS"><br><br>
				<input id="submitButton" type="submit" value="DODAJ">
			</form><br><br>
			<table style="margin-left: 50px;">
				<tr>
					<td style="padding-left: 10px; padding-right: 10px;">ID ekipe</td>
					<td style="padding-left: 10px; padding-right: 10px;">Ime ekipe</td>
					<td style="padding-left: 10px; padding-right: 10px;">Okrajšava ekipe</td>
				</tr>
				<?php foreach (websitedatabase::getAllTeams() as $teams): ?>
				<tr>					
					<td><?= $teams["ekipaID"] ?></td>
					<td><?= $teams["naziv"] ?></td>
					<td><?= $teams["nazivOkrajsava"] ?></td>
				</tr><?php endforeach; ?>
			</table><?php
		}if($action==6 && ($admin==True)) {
			?><br><br><br>
			<form method="post" action="FilesWeDontNeedToTalkAbout/submittedforms/submitorganizacija.php" style="margin-left: 50px;">
				<label for="orgname">Ime organizacije: </label><br>
				<input type="text" id="orgname" name="orgname" placeholder="ProgramiranjeFTW" required><br><br>
				<input id="submitButton" type="submit" value="DODAJ">
			</form><br><br>
			<table style="margin-left: 50px;">
				<tr>
					<td style="padding-left: 10px; padding-right: 10px;">ID ekipe</td><td>Ime ekipe</td>
				</tr>
				<?php foreach (websitedatabase::getAllOrganizations() as $org): ?>
				<tr>					
					<td><?= $org["organizacijaID"] ?></td>
					<td><?= $org["naziv"] ?></td>
				</tr><?php endforeach; ?>
			</table><?php
		}
		?> 
	</div>
		<div style="height: 150px"></div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script src="bootstrap.min.js"></script>
		<script>$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
			  if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
			  }
			  var $subMenu = $(this).next('.dropdown-menu');
			  $subMenu.toggleClass('show');


			  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass('show');
			  });


			  return false;
			});
			
			function getRidOfIt() {
				window.location.href = "/deleteArticle.php?article_id=<?= $article_id ?>";
			};</script> <?php
	}
	else {
		header("Location: https://eszs.si/login.php");		
		exit();
	}
	?>
