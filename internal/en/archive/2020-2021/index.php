<?php
    require_once("internal/news_db.php");
?><!DOCTYPE html>
<html>
	<head>
		<title>E-športna zveza Slovenije</title>
		<link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600;700&display=swap" as="style">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="jquery.fancybox.min.css">
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="FilesWeDontNeedToTalkAbout/PluginsButNotReally/slick.css"/>
		<link rel="icon" href="images/eszs_simbol_moder.png">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php include "header.html" ?> 
		<div class="firstcontentbox">
			<div id="elementToMove"><img src="images/eszs_simbol_bel.png" width="20%"></div>
		</div>
		<!--<div class="secondcontentbox">
			<h3>naši člani in partnerji</h3>
			<div id="myCarousel" class="carousel slide bg-inverse w-80 ms-auto me-auto" data-bs-ride="carousel" style="padding-top: 40px;">
				<ol class="carousel-indicators">
					<li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
					<li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
					<li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="container" style="padding-bottom: 60px;">
							<div class="row">
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/Outset.png" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/DragonsESport.png" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/thtesports.png" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/pByte.png" class="sponsorimage"></div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container" style="padding-bottom: 60px;">
							<div class="row">
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/sloracing.png" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/SneakyFoxes.png" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/Twire.png" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/StageOne.png" class="sponsorimage"></div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container" style="padding-bottom: 60px;">
							<div class="row">
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/ballix.png" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/sctriglav.png" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/ges.png" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-3 col-lg-3"><img src="images/claniInPartnerji/iesf.png" class="sponsorimage"></div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="container" style="padding-bottom: 60px;">
							<div class="row">
								<div class="col-xxl-3 col-xl-3 col-lg-3"></div>
								<div class="col-xxl-3 col-xl-6 col-lg-6"><img src="images/claniInPartnerji/Reveris.png" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-6 col-lg-6"><br><br><br><img src="images/claniInPartnerji/logout.jpg" class="sponsorimage"></div>
								<div class="col-xxl-3 col-xl-3 col-lg-3"></div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</a>
			</div>
		</div>-->
		<div class="secondcontentbox">
			<h3 style="font-size: 25px;">člani</h3>
			<div class="container">
				<div class="row" style="position: relative; display: flex; justify-content: space-between; align-items: center; padding-top: 40px;">
					<div class="prev_arrow" style="margin-left: -30px;"><span class="arrow_prev"><img src="images/arrow.svg" class="svgarrowarrowonyello" style="transform: rotate(180deg);"></span></div>
						<div class="tvoj-slider" id="neki">
							<!--<a href="http://outset.si/" target="_blank"><div class="items"><img src="images/claniInPartnerji/Outset.png" class="sponsorimage"></div></a>
							<a href="http://www.dragons.si/?fbclid=IwAR0GDzipl9HENia0FJTHjrEIiTVD9B03pUpv1RfdNWKs2Y_XaA26KZ2SzH4" target="_blank"><div class="items"><img src="images/claniInPartnerji/DragonsESport.png" class="sponsorimage"></div></a>
							<a href="https://thtesports.com/" target="_blank"><div class="items"><img src="images/claniInPartnerji/thtesports.png" class="sponsorimage"></div></a>
							<a href="https://pbyte.si/" target="_blank"><div class="items"><img src="images/claniInPartnerji/pByte.png" class="sponsorimage"></div></a>
							<a href="https://www.slo-racing.com/" target="_blank"><div class="items"><img src="images/claniInPartnerji/sloracing.png" class="sponsorimage"></div></a>
							<a href="https://sneakyfoxes.org/" target="_blanket"><div class="items"><img src="images/claniInPartnerji/SneakyFoxes.png" class="sponsorimage"></div></a>
							<a href="https://sneakyfoxes.org/" target="_blank"><div class="items"><img src="images/claniInPartnerji/Twire.png" class="sponsorimage"></div></a>				
							<a href="https://balix.si/" target="_blank"><div class="items"><img src="images/claniInPartnerji/ballix.png" class="sponsorimage"></div></a>
							<a href="https://www.sctriglav.si/" target="_blank"><div class="items"><img src="images/claniInPartnerji/sctriglav.png" class="sponsorimage"></div></a>
							<a href="https://www.globalesports.org/" target="_blank"><div class="items"><img src="images/claniInPartnerji/ges.png" class="sponsorimage"></div></a>
							<a href="https://iesf.org/" target="_blank"><div class="items"><img src="images/claniInPartnerji/iesf.png" class="sponsorimage"></div></a>
							<a href="https://www.reveris.net/" target="_blank"><div class="items"><img src="images/claniInPartnerji/Reveris.png" class="sponsorimage"></div></a>
							<a href="https://www.logout.org/sl/" target="_blank"><div class="items"><img src="images/claniInPartnerji/logout.jpg" class="sponsorimage" style="padding-top: 60px;"></div></a>-->
							<a href="http://outset.si/" target="_blank"><div class="items"><img src="images/claniInPartnerji/Outset.png" class="sponsorimage"></div></a>
							<a href="http://www.dragons.si/?fbclid=IwAR0GDzipl9HENia0FJTHjrEIiTVD9B03pUpv1RfdNWKs2Y_XaA26KZ2SzH4" target="_blank"><div class="items"><img src="images/claniInPartnerji/DragonsESport.png" class="sponsorimage"></div></a>
							<a href="https://thtesports.com/" target="_blank"><div class="items"><img src="images/claniInPartnerji/thtesports.png" class="sponsorimage"></div></a>
							<a href="https://pbyte.si/" target="_blank"><div class="items"><img src="images/claniInPartnerji/pByte.png" class="sponsorimage"></div></a>
							<a href="https://www.slo-racing.com/" target="_blank"><div class="items"><img src="images/claniInPartnerji/sloracing.png" class="sponsorimage"></div></a>
							<a href="https://sneakyfoxes.org/" target="_blanket"><div class="items"><img src="images/claniInPartnerji/SneakyFoxes.png" class="sponsorimage"></div></a>
						</div>
					<div class="next_arrow" style="margin-right: 30px;"><span class="arrow_next"><img src="images/arrow.svg" class="svgarrowarrowonyello" style="transform: rotate(0deg);"></span></div>
				</div>
			</div>
		</div>
		<div class="thirdcontentbox" style="margin-top: 40px;">
			<h1>E-športna zveza Slovenije</h1><br>

			<span style="font-size: 16px;">E-športna zveza Slovenije je krovna neprofitna organizacija za promocijo in regulacijo e-športa v Sloveniji.<br>
			EŠZS je združenje društev, ki že dolga leta delujejo, sodelujejo in si prizadevajo za<br> uspehe slovenskih organizacij in ekip na področju slovenskega e-športa.</span><br><br><br>

			<a class="buttonlink" href="http://eszs.si/page.php?page=Poslanstvo_in_vizija">več o zvezi</a>

		</div>
		<div class="fourthcontentbox">
			<div class="highlightsoverlay"></div>
			<div class="container">
				<div class="row" style="opacity: 1;">
					<div class="col-xxl-6 col-xl-6 col-lg-6" style="padding-top: 0px; z-index: 1;"><br><br><br><br><br>
						<!--<img src="images/eszs_simbol_bel.png" width="10%x" style="padding-bottom: 10px;">-->
						<h1>Slovensko državno prvenstvo 2021/2022</h1>
						<p>Kvalifikacije za Slovensko državno prvenstvo se bodo začele konec januarja, ter bodo potekale do sredine februarja. Glavnega dela tekmovanja se bodo udeležili zgolj najboljši igralci oz. ekipe, turnir bo potekal od februarja do začetka maja.<p>
						<a class="buttonlink" href="article.php?id=86">PRIJAVI SE</a>
					</div>
				</div>
			</div>
		</div>
		<div class="fifthcontentbox" style="margin-top: -40px;">
			<center><h1>Zadnje objave in novice</h1>
			<img src="images/arrow.svg" class="svgarrow"></center>
			<div class="container">
                <div class="row">
                    <?php
                    if (isset($_GET["tag_id"])) {
                        $previews = news_db::getArticlesByTag($_GET["tag_id"]);
                    } else {
                        $previews = news_db::getArticlesPreviews();
                    }
                    $i = 0;
                    foreach ($previews as $preview):
                            ?>
                    <div class="col-xxl-6 col-xl-6 col-lg-6" style="padding-top: 25px;">
                        <a href="article.php?id=<?= $preview["news_article_id"] ?>">
                            <div class="newsboxcontainer">
                                <img src="<?= $preview['news_article_preview_image'] ?>" alt="News" class="newspreviewimage" style="width:100%">
                                <div class="overlay">
                                    <div class="newstitletext">
                                        <div class="newssubtitlepin">Dogodek | <?= $preview["news_article_date"] ?></div>
                                        <div class="newstitlepin"><?= $preview["news_article_title"] ?></div>
                                    </div>
                                    <div class="newstitlevec"><div class="vectext">več</div></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                    $i=$i+1;
                    if ($i%4 == 0) {
                    	break;
                    }
                    if ($i%2 == 0) {?>

                    </div>
                    <div class="row">
                <?php }
                endforeach; ?>
                </div>
			</div>
		</div>
		<div class="sixthcontainer" style="padding-bottom: 50px;">
			<!--<center>
				<img src="images/eszs_simbol_bel.png" width="5%" style="padding-bottom: 10px;">
				<h1>Slovensko državno prvenstvo</h1>
				<h4>Novice in prijave na SDP</h4>
				<div class="container" style="padding-top: 50px;">
				<div class="row">
					<div class="col-xxl-1 col-xl-1 col-lg-1" style="text-align: left;">
						<img src="images/arrow.svg" class="svgarrow" style="transform: rotate(0deg);">
					</div>
					<div class="col-xxl-1 col-xl-1 col-lg-1"></div>
					<div class="col-xxl-1 col-xl-1 col-lg-1">
						<a href="page.php?page=SDP_%E2%80%93_Rainbow_Six:_Siege_Dr%C5%BEavno_Prvenstvo"><img src="images/games/r6.svg" class="svggameicon"></a>
					</div>
					<div class="col-xxl-1 col-xl-1 col-lg-1">
						<a href="page.php?page=SDP_%E2%80%93_League_of_Legends"><img src="images/games/lol.svg" class="svggameicon"></a>
					</div>
					<div class="col-xxl-1 col-xl-1 col-lg-1">
						<a href="page.php?page=SDP_%E2%80%93_Valorant"><img src="images/games/valorant.svg" class="svggameicon"></a>
					</div>
					<div class="col-xxl-1 col-xl-1 col-lg-1">
						<a href="page.php?page=SDP_–_FIFA21_Državno_Prvenstvo"><img src="images/games/fifa.svg" class="svggameicon"></a>
					</div>
					<div class="col-xxl-1 col-xl-1 col-lg-1">
						<a href="https://www.slo-racing.com/sdp-acc-osnovne-informacije/"><img src="images/games/Untitled-3.svg" class="svggameicon"></a>
					</div>
					<div class="col-xxl-1 col-xl-1 col-lg-1">
						<a href="page.php?page=SDP_–_Slovensko_Državno_Prvenstvo_sezona_2020/2021"><img src="images/games/f1.svg" class="svggameicon"></a>
					</div>
					<div class="col-xxl-1 col-xl-1 col-lg-1">
						<a href="page.php?page=SDP_–_Slovensko_Državno_Prvenstvo_sezona_2020/2021"><img src="images/games/gran-turismo-color.svg" class="svggameicon"></a>
					</div>
					<div class="col-xxl-1 col-xl-1 col-lg-1">
						<a href="page.php?page=SDP_–_Counter-Strike:_Global_Offensive"><img src="images/games/counter-strike.svg" class="svggameicon"></a>
					</div>
					<div class="col-xxl-1 col-xl-1 col-lg-1"></div>
					<div class="col-xxl-1 col-xl-1 col-lg-1" style="text-align: right;">
						<a href="page.php?page=SDP_%E2%80%93_League_of_Legends"><img src="images/arrow.svg" class="svgarrow" style="transform: rotate(180deg);"></a>
					</div>

				</div>
			</div>
			</center>-->
			<div class="clanicontentbox" style="margin-bottom: 150px; margin-top: 40px;">
			<h3 style="font-size: 25px;">partnerji</h3>
			<div class="container">
				<div class="row" style="position: relative; display: flex; justify-content: space-between; align-items: center; padding-top: 40px;">
					<div class="prev_arrow" style="margin-left: -30px;"><span class="arrow_prev"><img src="images/arrow.svg" class="svgarrowarrowonyello" style="transform: rotate(180deg);"></span></div>
						<div class="tvoj-slider" id="neki">
							<a href="https://twire.gg/en/pubg" target="_blank"><div class="items"><img src="images/claniInPartnerji/Twire.png" class="sponsorimage"></div></a>				
							<a href="https://balix.si/" target="_blank"><div class="items"><img src="images/claniInPartnerji/ballix.png" class="sponsorimage"></div></a>
							<a href="https://www.sctriglav.si/" target="_blank"><div class="items"><img src="images/claniInPartnerji/sctriglav.png" class="sponsorimage"></div></a>
							<a href="https://www.globalesports.org/" target="_blank"><div class="items"><img src="images/claniInPartnerji/ges.png" class="sponsorimage"></div></a>
							<a href="https://iesf.org/" target="_blank"><div class="items"><img src="images/claniInPartnerji/iesf.png" class="sponsorimage"></div></a>
							<a href="https://www.reveris.net/" target="_blank"><div class="items"><img src="images/claniInPartnerji/Reveris.png" class="sponsorimage"></div></a>
							<a href="https://www.logout.org/sl/" target="_blank"><div class="items"><img src="images/claniInPartnerji/logout.jpg" class="sponsorimage" style="padding-top: 60px;"></div></a>
							<a href="https://en.sommet-officiel.com/" target="_blank"><div class="items"><img src="images/claniInPartnerji/logosommet.png" class="sponsorimage"></div></a>							
						</div>
					<div class="next_arrow" style="margin-right: 30px;"><span class="arrow_next"><img src="images/arrow.svg" class="svgarrowarrowonyello" style="transform: rotate(0deg);"></span></div>
				</div>
			</div>
		</div>
			<center>
				<img src="images/eszs_simbol_bel.png" width="5%" style="padding-bottom: 10px;">
				<h1>Slovensko državno prvenstvo</h1>
				<h4>Novice in prijave na SDP</h4>
			</center>
			<div class="container" style="margin-bottom: 35px;">
				<div class="row" style="position: relative; display: flex; justify-content: space-between; align-items: center; padding-top: 50px;">					
						<div class="tvoj-drugi-slider" id="drugineki">
							<div class="items"><img src="images/arrow.svg" class="svgarrow" style="transform: rotate(0deg);"></div>
							<div class="items"><a href="archive/2020-2021/sdp-r6.php"><img src="images/games/r6.svg" class="svggameicon"></a></div>
							<div class="items"><a href="archive/2020-2021/sdp-league_of_legends.php"><img src="images/games/lol.svg" class="svggameicon"></a></div>
							<div class="items"><a href="archive/2020-2021/sdp-valorant.php"><img src="images/games/valorant.svg" class="svggameicon"></a></div>
							<div class="items"><a href="archive/2020-2021/sdp-fifa21.php"><img src="images/games/fifa.svg" class="svggameicon"></a></div>
							<div class="items"><a href="https://www.slo-racing.com/sdp-acc-osnovne-informacije/"><img src="images/games/Untitled-3.svg" class="svggameicon"></a></div>
							<div class="items"><a href="#"><img src="images/games/f1.svg" class="svggameicon"></a></div>
							<div class="items"><a href="#"><img src="images/games/gran-turismo-color.svg" class="svggameicon"></a></div>
							<div class="items"><a href="archive/2020-2021/sdp-csgo.php"><img src="images/games/counter-strike.svg" class="svggameicon"></a></div>	
							<div class="items"><img src="images/arrow.svg" class="svgarrow" style="transform: rotate(180deg);"></div>
						</div></div>
			</div>
		</div>
		<footer>
		<?php include "footer.html"; ?>
			</footer>
			<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
			<script src="bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="jquery.fancybox.min.js"></script>
			<script type="text/javascript" src="FilesWeDontNeedToTalkAbout/PluginsButNotReally/slick.min.js"></script>			
			<script type="text/javascript" src="FilesWeDontNeedToTalkAbout/PluginsButNotReally/main.js"></script>
			<script>

				setTimeout(function(){
					document.getElementById('elementToMove').style.left = '43%'; // new left position is 1000px in this example
				}, 500); // 2000 = 2 seconds

			</script>
	</body>
</html>
