<!DOCTYPE html>
<html>
	<head>
		<title>E-športna zveza Slovenije</title>
		<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600;700&display=swap" as="style">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="jquery.fancybox.min.css">
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="icon" href="images/eszs_simbol_moder.png">
		<meta charset="UTF-8">
		<link href='FilesWeDontNeedToTalkAbout/PluginsButNotReally/Koledar/main.css' rel='stylesheet' />
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php include "header.html" ?>
		<div class="container" style="padding-bottom: 50px;">
			<div class="row">
				<div class="col-xxl-12 col-xl-12 col-lg-12" id="articletitle">
					<div class="newstitletext" style="width: 80%; padding: 40px;">
						<div class="newstitlepin" style="font-size: 30px; padding-bottom: 10px; text-transform: uppercase;">Koledar dogodkov</div>
												
					</div>
					
				</div>
			</div>
		</div>
		<div class="container" style="padding-bottom: 150px;">
			<div class="row">
				<div class="col-xxl-8 col-xl-8 col-lg-12" id="articletitle">
					<div id='calendar'></div>					
				</div>
			</div>
		</div>
		
		<?php include "footer.html" ?>
		<script src="bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="jquery.fancybox.min.js"></script>
			<script src='FilesWeDontNeedToTalkAbout/PluginsButNotReally/Koledar/main.js'></script>
    <script>

		document.addEventListener('DOMContentLoaded', function() {
		var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
			locale: 'sl',
          initialView: 'dayGridMonth',
		  timeZone: 'UTC',
		  events: [
		  <?php include "FilesWeDontNeedToTalkAbout/seznamDogodkov.txt" ?>
	
    // other events here...
  ],
  eventTimeFormat: { // like '14:30:00'
    hour: 'numeric',
    minute: '2-digit',
    meridiem: false,
	hour12: false
  }
		  
		  
        });
        calendar.render();
		calendar.setOption('locale', 'sl');
      });

    </script>
	</body>
</html>
