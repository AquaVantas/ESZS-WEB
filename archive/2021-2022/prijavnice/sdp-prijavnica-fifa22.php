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
					<img src="../images/cover_fifa.png" width="100%">
					<br><br><br>
					<h1>Prijavnica na SDP FIFA22</h1>
					Polja označena z <span style="color: red;">*</span> so obvezna!
					<form>
						<table width="100%">
							<tr>
								<td style="padding-right: 10px;">
									<label for="name">Ime: <span style="color: red;">*</span></label><br>
									<input type="text" id="name" name="name" placeholder="Janez" required><br>
								</td>
								<td style="padding-left: 10px;">
									<label for="surname">Priimek: <span style="color: red;">*</span></label><br>
									<input type="text" id="surname" name="surname" placeholder="Novak" required><br>
								</td>
							<tr>
						</table>
						<label for="nickname">PSN ID: <span style="color: red;">*</span></label><br>
						<input type="text" id="nickname" name="nickname" placeholder="janko_kralj" required><br>
						<label for="email">Email: <span style="color: red;">*</span></label><br>
						<input type="text" id="email" name="email" placeholder="janez.novak@nekmail.com" required><br>
						<label for="discord">Discord: <span style="color: red;">*</span></label><br>
						<input type="text" id="discord" name="discord" placeholder="janci#0420" required><br>
						<label for="ekipa">Ekipa / društvo:</label><br>
						<input type="text" id="ekipa" name="ekipa" placeholder="ekipa / društvo"><br>
						<label for="drzavljanstvo">Državljanstvo: <span style="color: red;">*</span></label><br>
						<input type="text" id="drzavljanstvo" name="drzavljanstvo" placeholder="slovensko" required><br><br>
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
