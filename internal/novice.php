<?php
    require_once("internal/news_db.php");
?><!DOCTYPE html>
<html>
    <head>
		<!-- Hotjar Tracking Code for https://eszs.si -->
		<script>
			(function(h,o,t,j,a,r){
				h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
				h._hjSettings={hjid:2846573,hjsv:6};
				a=o.getElementsByTagName('head')[0];
				r=o.createElement('script');r.async=1;
				r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
				a.appendChild(r);
			})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
		</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-TGV67K8RQL"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-TGV67K8RQL');
		</script>
        <title>E-športna zveza Slovenije</title>
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600;700&display=swap" as="style">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="icon" href="images/eszs_simbol_moder.png">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include "header.html" ?>
		<div class="container">
			<div class="row">
				<div class="col-xxl-12 col-xl-12 col-lg-12" id="articletitle">
					<div class="newstitletext" style="width: 80%; padding: 40px;">
						<div class="newstitlepin" style="font-size: 30px; padding-bottom: 10px; text-transform: uppercase;">Novice</div>
												
					</div>
					
				</div>
			</div>
		</div>
        <center><div class="newssection">
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
						$date = $preview["news_article_date"];
						$date = date("d.m.y", strtotime($date));
                            ?>
                    <div class="col-xxl-6 col-xl-6 col-lg-6" style="padding-top: 25px;">
                        <a href="article.php?id=<?= $preview["news_article_id"] ?>">
                            <div class="newsboxcontainer">								
                                <div style="width: 100%; height: 318px;"><img src="<?= $preview['news_article_preview_image'] ?>" alt="News" class="newspreviewimage" style=" position: relative; display: block;width: 100%; height 100%; object-fit: cover;"></div>
                                <div class="overlay">
                                    <div class="newstitletext">
                                        <div class="newssubtitlepin">Dogodek | <?= $date ?></div>
                                        <div class="newstitlepin"><?= $preview["news_article_title"] ?></div>
                                    </div>
                                    <div class="newstitlevec"><div class="vectext">več</div></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                    $i=$i+1;
                    if ($i%2 == 0) {?>

                </div>
                <div class="row">
                <?php }
                endforeach; ?>
                </div>
            </div>
        </div></center>


        <footer>
        <?php
        include "footer.html";?>
        </footer>



        <script>

        </script>
    </body>
</html>
