<?php
	session_start();
	if ($_SESSION['prijavljen'] != True) {
		header("Location: https://mischievousbazaar.com/login.php");		
		exit();
	}

	require_once("internal/news_db_admin.php");

	if (isset($_GET['article_id']) {
		news_db_admin::deleteArticle($_GET['article_id']);
	}
	header("Location: https://mischievousbazaar.com/cpanel.php");
	die();
?>
