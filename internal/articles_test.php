<?php
    require_once("internal/news_db.php");
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf8"/>
    <title>Articles</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>article_id</td>
                <td>article_title</td>
                <td>article_description</td>
                <td>article_date</td>
            </tr>
        </thead><?php
        $previews = news_db::getArticlesPreviews();
        foreach ($previews as $preview): ?>
            <tr>
                <td><?= $preview["news_article_id"] ?>
                <td><?= $preview["news_article_title"] ?>
                <td><?= $preview["news_article_description"] ?>
                <td><?= $preview["news_article_date"] ?>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php if (news_db::tagExists("Test tag")) {?>
        <p>Tag <?= news_db::tagExists("Test tag")?> exists :D</p>
    <?php } else {?>
        <p>Tag doesn't exists :(</p>
    <?php } ?>
    <?php if (news_db::tagExists("Test tag2")) {?>
        <p>Tag exists :D</p>
    <?php } else {?>
        <p>Tag doesn't exists :(</p>
    <?php } ?>
</body>
</html>
