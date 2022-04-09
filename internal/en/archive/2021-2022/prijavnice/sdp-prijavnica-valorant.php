<!DOCTYPE html>
<html>
	<head>
		<title>E-športna zveza Slovenije</title>
		<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600;700&display=swap" as="style">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="/../../../jquery.fancybox.min.css">
		<link rel="stylesheet" href="/../../../bootstrap.min.css">
		<link rel="icon" href="/../../../images/eszs_simbol_moder.png">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/../../../style.css">
		<style>
		input {
			color: white;
			padding-left: 15px;
			width: 100%;
			height: 50px;
			background-color: #1e2236;
			border: 2px solid #ecb100;
			border-radius: 10px;
		}
		
		label {
			padding-top: 15px;
			font-weight: bold;
		}
		
		#submitButton {
			background-color: #ecb100; 
			font-weight: bold;
		}
		
		#submitButton:hover {
			background-color: #1e2236;
			transition-duration: 1s;
			transtion: ease-in-out;
		}
		
		</style>
	</head>
	<body>
		<div class="container" style="padding-top: 50px;">
			<div class="row">
				<div class="col-xxl-2 col-xl-2 col-lg-2"></div>
				<div class="col-xxl-8 col-xl-8 col-lg-8" style="padding-bottom: 70px;">
					<img src="../images/cover_valorant.png" width="100%">
					<br><br><br>
					<h1>Prijavnica na SDP Valorant</h1>
					Polja označena z <span style="color: red;">*</span> so obvezna!
					
				
					<form method="post" action="submitValorant.php"><br>
						<label for="team"><span style="font-size: 23px; font-weight: bold;">IME EKIPE:</span> <span style="color: red;">*</span></label><br>
						<input type="text" id="team" name="team" placeholder="ActuallyQuiteFainthearted" required><br><br><br>
						<span style="font-size: 23px; font-weight: bold;">KAPETAN EKIPE</span>
						<table width="100%">
							<tr>
								<td style="padding-right: 10px;">
									<label for="captainname">Ime: <span style="color: red;">*</span></label><br>
									<input type="text" id="captainname" name="captainname" placeholder="Janez" required><br>
								</td>
								<td style="padding-left: 10px;">
									<label for="captainsurname">Priimek: <span style="color: red;">*</span></label><br>
									<input type="text" id="captainsurname" name="captainsurname" placeholder="Novak" required><br>
								</td>
							<tr>
						</table>
						<label for="captainemail">Email: <span style="color: red;">*</span></label><br>
						<input type="text" id="captainemail" name="captainemail" placeholder="janez.novak@nekmail.com" required><br>
						<label for="captaindiscord">Discord: <span style="color: red;">*</span></label><br>
						<input type="text" id="captaindiscord" name="captaindiscord" placeholder="janci#0420" required><br>
						<label for="captainnickname">Vzdevek v igri: <span style="color: red;">*</span></label><br>
						<input type="text" id="captainnickname" name="captainnickname" placeholder="JanezekV83"><br>
						<label for="captaindrzavljanstvo">Državljanstvo: <span style="color: red;">*</span></label><br>
						<input type="text" id="captaindrzavljanstvo" name="captaindrzavljanstvo" placeholder="slovensko" required><br><br><br><br>
						
						
						<span style="font-size: 23px; font-weight: bold;">IGRALEC 2</span>
						<table width="100%">
							<tr>
								<td style="padding-right: 10px;">
									<label for="player2name">Ime: <span style="color: red;">*</span></label><br>
									<input type="text" id="player2name" name="player2name" placeholder="Janez" required><br>
								</td>
								<td style="padding-left: 10px;">
									<label for="player2surname">Priimek: <span style="color: red;">*</span></label><br>
									<input type="text" id="player2surname" name="player2surname" placeholder="Novak" required><br>
								</td>
							<tr>
						</table>
						<label for="player2email">Email: <span style="color: red;">*</span></label><br>
						<input type="text" id="player2email" name="player2email" placeholder="janez.novak@nekmail.com" required><br>
						<label for="player2discord">Discord: <span style="color: red;">*</span></label><br>
						<input type="text" id="player2discord" name="player2discord" placeholder="janci#0420" required><br>
						<label for="player2nickname">Vzdevek v igri: <span style="color: red;">*</span></label><br>
						<input type="text" id="player2nickname" name="player2nickname" placeholder="JanezekV83" required><br>
						<label for="player2drzavljanstvo">Državljanstvo: <span style="color: red;">*</span></label><br>
						<input type="text" id="player2drzavljanstvo" name="player2drzavljanstvo" placeholder="slovensko" required><br><br><br><br>
						
						
						<span style="font-size: 23px; font-weight: bold;">IGRALEC 3</span>
						<table width="100%">
							<tr>
								<td style="padding-right: 10px;">
									<label for="player3name">Ime: <span style="color: red;">*</span></label><br>
									<input type="text" id="player3name" name="player3name" placeholder="Janez" required><br>
								</td>
								<td style="padding-left: 10px;">
									<label for="player3surname">Priimek: <span style="color: red;">*</span></label><br>
									<input type="text" id="player3surname" name="player3surname" placeholder="Novak" required><br>
								</td>
							<tr>
						</table>
						<label for="player3email">Email: <span style="color: red;">*</span></label><br>
						<input type="text" id="player3email" name="player3email" placeholder="janez.novak@nekmail.com" required><br>
						<label for="player3discord">Discord: <span style="color: red;">*</span></label><br>
						<input type="text" id="player3discord" name="player3discord" placeholder="janci#0420" required><br>
						<label for="player3nickname">Vzdevek v igri: <span style="color: red;">*</span></label><br>
						<input type="text" id="player3nickname" name="player3nickname" placeholder="JanezekV83" required><br>
						<label for="player3drzavljanstvo">Državljanstvo: <span style="color: red;">*</span></label><br>
						<input type="text" id="player3drzavljanstvo" name="player3drzavljanstvo" placeholder="slovensko" required><br><br><br><br>
						
						
						<span style="font-size: 23px; font-weight: bold;">IGRALEC 4</span>
						<table width="100%">
							<tr>
								<td style="padding-right: 10px;">
									<label for="player4name">Ime: <span style="color: red;">*</span></label><br>
									<input type="text" id="player4name" name="player4name" placeholder="Janez" required><br>
								</td>
								<td style="padding-left: 10px;">
									<label for="player4surname">Priimek: <span style="color: red;">*</span></label><br>
									<input type="text" id="player4surname" name="player4surname" placeholder="Novak" required><br>
								</td>
							<tr>
						</table>
						<label for="player4email">Email: <span style="color: red;">*</span></label><br>
						<input type="text" id="player4email" name="player4email" placeholder="janez.novak@nekmail.com" required><br>
						<label for="player4discord">Discord: <span style="color: red;">*</span></label><br>
						<input type="text" id="player4discord" name="player4discord" placeholder="janci#0420" required><br>
						<label for="player4nickname">Vzdevek v igri: <span style="color: red;">*</span></label><br>
						<input type="text" id="player4nickname" name="player4nickname" placeholder="JanezekV83" required><br>
						<label for="player4drzavljanstvo">Državljanstvo: <span style="color: red;">*</span></label><br>
						<input type="text" id="player4drzavljanstvo" name="player4drzavljanstvo" placeholder="slovensko" required><br><br><br><br>
						
						
						<span style="font-size: 23px; font-weight: bold;">IGRALEC 5</span>
						<table width="100%">
							<tr>
								<td style="padding-right: 10px;">
									<label for="player5name">Ime: <span style="color: red;">*</span></label><br>
									<input type="text" id="player5name" name="player5name" placeholder="Janez" required><br>
								</td>
								<td style="padding-left: 10px;">
									<label for="player5surname">Priimek: <span style="color: red;">*</span></label><br>
									<input type="text" id="player5surname" name="player5surname" placeholder="Novak" required><br>
								</td>
							<tr>
						</table>
						<label for="player5email">Email: <span style="color: red;">*</span></label><br>
						<input type="text" id="player5email" name="player5email" placeholder="janez.novak@nekmail.com" required><br>
						<label for="player5discord">Discord: <span style="color: red;">*</span></label><br>
						<input type="text" id="player5discord" name="player5discord" placeholder="janci#0420" required><br>
						<label for="player5nickname">Vzdevek v igri: <span style="color: red;">*</span></label><br>
						<input type="text" id="player5nickname" name="player5nickname" placeholder="JanezekV83" required><br>
						<label for="player5drzavljanstvo">Državljanstvo: <span style="color: red;">*</span></label><br>
						<input type="text" id="player5drzavljanstvo" name="player5drzavljanstvo" placeholder="slovensko" required><br><br><br><br>
						
						
						<span style="font-size: 23px; font-weight: bold;">IGRALEC 6</span>
						<table width="100%">
							<tr>
								<td style="padding-right: 10px;">
									<label for="player6name">Ime:</label><br>
									<input type="text" id="player6name" name="player6name" placeholder="Janez"><br>
								</td>
								<td style="padding-left: 10px;">
									<label for="player6surname">Priimek:</label><br>
									<input type="text" id="player6surname" name="player6surname" placeholder="Novak"><br>
								</td>
							<tr>
						</table>
						<label for="player6email">Email:</label><br>
						<input type="text" id="player6email" name="player6email" placeholder="janez.novak@nekmail.com"><br>
						<label for="player6discord">Discord:</label><br>
						<input type="text" id="player6discord" name="player6discord" placeholder="janci#0420"><br>
						<label for="player6nickname">Vzdevek v igri: </label><br>
						<input type="text" id="player6nickname" name="player6nickname" placeholder="JanezekV83"><br>
						<label for="player6drzavljanstvo">Državljanstvo:</label><br>
						<input type="text" id="player6drzavljanstvo" name="player6drzavljanstvo" placeholder="slovensko"><br><br><br><br>
						
						
						<span style="font-size: 23px; font-weight: bold;">IGRALEC 7</span>
						<table width="100%">
							<tr>
								<td style="padding-right: 10px;">
									<label for="player7name">Ime:</label><br>
									<input type="text" id="player7name" name="player7name" placeholder="Janez"><br>
								</td>
								<td style="padding-left: 10px;">
									<label for="player7surname">Priimek:</label><br>
									<input type="text" id="player7surname" name="player7surname" placeholder="Novak"><br>
								</td>
							<tr>
						</table>
						<label for="player7email">Email:</label><br>
						<input type="text" id="player7email" name="player7email" placeholder="janez.novak@nekmail.com"><br>
						<label for="player7discord">Discord:</label><br>
						<input type="text" id="player7discord" name="player7discord" placeholder="janci#0420"><br>
						<label for="player7nickname">Vzdevek v igri: </label><br>
						<input type="text" id="player7nickname" name="player7nickname" placeholder="JanezekV83"><br>
						<label for="player7drzavljanstvo">Državljanstvo:</label><br>
						<input type="text" id="player7drzavljanstvo" name="player7drzavljanstvo" placeholder="slovensko"><br><br><br>
						<table width="100%">
							<tr>
								<td style="width: 50px; text-align: left;">
									<input type="checkbox" id="scales" name="scales" style="height: 20px; widght: 20px;" required>
								</td>
								<td>
									<label for="scales">Prebral sem pravilnik in se z njim strinjam. <span style="color: red;">*</span></label>
								<td>
								</td>
							</tr>
							<tr>
								<td style="width: 50px; text-align: left;">
									<input type="checkbox" id="scales" name="scales" style="height: 20px; widght: 20px;" required>
								</td>
								<td>
									<label for="scales">Strinjam se z obdelavo podatkov. <span style="color: red;">*</span></label>
								<td>
								</td>
							</tr>
						</table><br><br>
						<input id="submitButton" type="submit" value="PRIJAVA">
					</form> 
				</div>
				<div class="col-xxl-2 col-xl-2 col-lg-2"></div>
				
			</div>
		</div>
	</body>
</html>
