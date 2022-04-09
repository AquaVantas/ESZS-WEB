<?php
if (isset($_POST["article_id"])) {
    if (
        !isset($_POST["title"]) ||
        !isset($_POST["description"]) ||
        !isset($_POST["date"]) ||
        !isset($_POST["author_id"]) ||
        !isset($_POST["tags"]) ||
        !isset($_POST["content"])
    ) {
        header("HTTP/1.1 400 Bad Request");
        die();
    }

    require_once("internal/news_db_admin.php");

    news_db_admin::updateArticle($_POST["article_id"], $_POST["title"], $_POST["description"], $_POST["content"], $_POST["date"], $_POST["author_id"]);
    $article_id = $_POST["article_id"];
} else {
    if (
        !isset($_POST["title"]) ||
        !isset($_POST["description"]) ||
        !isset($_FILES["preview_image"]) ||
        !isset($_POST["date"]) ||
        !isset($_POST["author_id"]) ||
        !isset($_POST["tags"]) ||
        !isset($_POST["content"])
    ) {
        header("HTTP/1.1 400 Bad Request");
        die();
    }
    $targetdir = 'images/articles/previews/';
    $targetfile = $targetdir . $_FILES['preview_image']['name'];

    if (!move_uploaded_file($_FILES['preview_image']['tmp_name'], $targetfile)) {
        header("HTTP/1.1 500 Internal Server Error");
        die();
    }

    require_once("internal/news_db_admin.php");


    $article_id = news_db_admin::addArticle($_POST["title"], $_POST["description"], $_POST["content"], $targetfile, $_POST["date"], $_POST["author_id"]);
}

$tags_arr = explode(",", $_POST["tags"]);
echo $_POST["tags"] . "<br><br>";

require_once("internal/news_db.php");

if (isset($_POST["article_id"])) {
    $tags = news_db::getTagsByArticle($article_id);
    foreach ($tags as $tag):
        news_db_admin::removeTagFromArticle($article_id, $tag["news_tag_id"]);
    endforeach;
}

foreach ($tags_arr as $tag):
    $tag = strtolower(trim($tag));
    echo $tag . "<br>";

    $tag_id = news_db::tagExists($tag);
    if (!$tag_id) {
        $tag_id = news_db_admin::addTag($tag);
        news_db_admin::addTagToArticle($article_id, $tag_id);
    }
    if (!news_db::articleHasTag($article_id, $tag_id)) {
        news_db_admin::addTagToArticle($article_id, $tag_id);
    }
endforeach;

?>
