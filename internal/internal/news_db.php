<?php
class news_db {
    private static $host = "localhost";
    private static $user = "enroot_aqua";
    private static $password = "MOJAbaza100";
    private static $schema = "enroot_eszsv01";
    private static $instance = null;

    private static function getInstance() {
        if (!self::$instance) {
            $config = "mysql:host=" . self::$host
                    . ";dbname=" . self::$schema;
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            );

            self::$instance = new PDO($config, self::$user, self::$password, $options);
        }

        return self::$instance;
    }

    public static function getArticlesPreviews() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_article_id, news_article_title, news_article_description, news_article_preview_image, news_article_date FROM news_articles WHERE news_article_hidden is FALSE AND news_article_date <= NOW() ORDER BY news_article_date DESC");
        $statement->execute();

        return $statement->fetchAll();
    }
	
	public static function getPagesPreviews() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_page_id, news_article_id, news_page_name, news_page_title FROM news_pages WHERE news_page_title IS NOT NULL ORDER BY news_page_name DESC");
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function getFeaturedArticles() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_article_id, news_article_title, news_article_description, news_article_preview_image, news_article_date FROM news_articles WHERE news_article_featured IS TRUE AND news_article_hidden is FALSE ORDER BY news_article_date DESC");
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function getTags() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_tag_id, news_tag_name FROM news_tags ORDER BY news_tag_name DESC");
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function getAuthors() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_author_id, news_author_name FROM news_authors ORDER BY news_author_name DESC");
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function tagExists($tag_name) {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_tag_id FROM news_tags WHERE news_tag_name = :tag_name LIMIT 1");
        $statement->bindParam(":tag_name", $tag_name, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchColumn();
    }

    public static function getArticleById($article_id) {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_articles.*, news_authors.* FROM news_articles LEFT JOIN news_authors USING (news_author_id) WHERE news_article_id = :article_id");

        $statement->bindParam(":article_id", $article_id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

    public static function getTagsByArticle($article_id) {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_tags.* FROM news_articles_tags JOIN news_tags USING (news_tag_id) WHERE news_article_id = :article_id");
        $statement->bindParam(":article_id", $article_id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function getArticlesByTag($tag_id) {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_article_id, news_article_title, news_article_description, news_article_preview_image, news_article_date, news_tags.* FROM news_tags JOIN news_articles_tags USING (news_tag_id) JOIN news_articles USING (news_article_id) WHERE news_tag_id = :tag_id AND news_article_hidden is FALSE");

        $statement->bindParam(":tag_id", $tag_id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function getArticlesByAuthor($author_id) {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_article_id, news_article_title, news_article_description, news_article_preview_image, news_article_date FROM news_authors JOIN news_articles USING (news_author_id) WHERE news_author_id = :author_id AND news_article_hidden is FALSE");
        $statement->bindParam(":author_id", $author_id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function getArticlesByYearsMonths() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_article_id, news_article_title, YEAR(news_article_date) AS year, MONTH(news_article_date) AS month FROM news_articles WHERE news_article_hidden is FALSE ORDER BY YEAR(news_article_date), MONTH(news_article_date)");
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function articleHasTag($article_id, $tag_id) {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT true FROM news_articles_tags WHERE news_article_id = :article_id AND news_tag_id = :tag_id");
        $statement->bindParam(":article_id", $article_id, PDO::PARAM_INT);
        $statement->bindParam(":tag_id", $tag_id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchColumn();
    }

    public static function getArticleByPage($page_name) {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT news_articles.* FROM news_articles JOIN news_pages USING (news_article_id) WHERE news_page_name = :page_name");
        $statement->bindParam(":page_name", $page_name, PDO::PARAM_STR);
        $statement->execute();

        return $statement->fetch();
    }

    public static function getPages() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT * FROM news_pages");
        $statement->execute();

        return $statement->fetchAll();
    }
}
?>
