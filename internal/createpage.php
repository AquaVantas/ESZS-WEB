<?php
if (!isset($_GET["page_name"])) {
    header("HTTP/1.1 400 Bad Request");
    die();
}

require_once("internal/news_db_admin.php");

news_db_admin::createPage($_GET["page_name"]);
?>
DONE!
