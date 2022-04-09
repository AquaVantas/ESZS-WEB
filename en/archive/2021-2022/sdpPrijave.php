<?php
class sdpPrijave {
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

    public static function addPlayer($name, $surname, $nickname, $email, $discord, $ekipa, $drzavljanstvo) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO fifaPrijave(ime, priimek, nick, email, discord, ekipa, drzavljanstvo) VALUES(:name, :surname, :nickname, :email, :discord, :ekipa, :drzavljanstvo)");
        $statement->bindParam(":name", $name, PDO::PARAM_STR);
        $statement->bindParam(":surname", $surname, PDO::PARAM_STR);
        $statement->bindParam(":nickname", $nickname, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":discord", $discord, PDO::PARAM_STR);
        $statement->bindParam(":ekipa", $ekipa, PDO::PARAM_STR);
		$statement->bindParam(":drzavljanstvo", $drzavljanstvo, PDO::PARAM_STR);
        $statement->execute();

        $statement = $db->prepare("SELECT LAST_INSERT_ID()");
        $statement->execute();

        return $statement->fetchColumn();
    }
	
	public static function addPlayerRL($name, $surname, $email, $discord, $nickname, $drzavljanstvo, $ekipa) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO rocketLeaguePrijave(ime, priimek, email, discord, vzdevek, drzavljanstvo, ekipa) VALUES(:name, :surname, :email, :discord, :nickname, :drzavljanstvo, :ekipa)");
        $statement->bindParam(":name", $name, PDO::PARAM_STR);
        $statement->bindParam(":surname", $surname, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":discord", $discord, PDO::PARAM_STR);
        $statement->bindParam(":nickname", $nickname, PDO::PARAM_STR);
		$statement->bindParam(":drzavljanstvo", $drzavljanstvo, PDO::PARAM_STR);
        $statement->bindParam(":ekipa", $ekipa, PDO::PARAM_STR);
        $statement->execute();

        $statement = $db->prepare("SELECT LAST_INSERT_ID()");
        $statement->execute();

        return $statement->fetchColumn();
    }
	
	public static function addPlayerCSGO($name, $surname, $email, $discord, $nickname, $drzavljanstvo, $ekipa) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO csgoPrijave(ime, priimek, email, discord, steamID, drzavljanstvo, ekipa) VALUES(:name, :surname, :email, :discord, :nickname, :drzavljanstvo, :ekipa)");
        $statement->bindParam(":name", $name, PDO::PARAM_STR);
        $statement->bindParam(":surname", $surname, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":discord", $discord, PDO::PARAM_STR);
        $statement->bindParam(":nickname", $nickname, PDO::PARAM_STR);
		$statement->bindParam(":drzavljanstvo", $drzavljanstvo, PDO::PARAM_STR);
        $statement->bindParam(":ekipa", $ekipa, PDO::PARAM_STR);
        $statement->execute();

        $statement = $db->prepare("SELECT LAST_INSERT_ID()");
        $statement->execute();

        return $statement->fetchColumn();
    }
	
	public static function addPlayerLOL($name, $surname, $email, $discord, $nickname, $drzavljanstvo, $ekipa) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO leagueOfLegendsPrijave(ime, priimek, email, discord, vzdevek, drzavljanstvo, ekipa) VALUES(:name, :surname, :email, :discord, :nickname, :drzavljanstvo, :ekipa)");
        $statement->bindParam(":name", $name, PDO::PARAM_STR);
        $statement->bindParam(":surname", $surname, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":discord", $discord, PDO::PARAM_STR);
        $statement->bindParam(":nickname", $nickname, PDO::PARAM_STR);
		$statement->bindParam(":drzavljanstvo", $drzavljanstvo, PDO::PARAM_STR);
        $statement->bindParam(":ekipa", $ekipa, PDO::PARAM_STR);
        $statement->execute();

        $statement = $db->prepare("SELECT LAST_INSERT_ID()");
        $statement->execute();

        return $statement->fetchColumn();
    }
	
	public static function addPlayerValorant($name, $surname, $email, $discord, $nickname, $drzavljanstvo, $ekipa) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO valorantPrijave(ime, priimek, email, discord, vzdevek, drzavljanstvo, ekipa) VALUES(:name, :surname, :email, :discord, :nickname, :drzavljanstvo, :ekipa)");
        $statement->bindParam(":name", $name, PDO::PARAM_STR);
        $statement->bindParam(":surname", $surname, PDO::PARAM_STR);
        $statement->bindParam(":email", $email, PDO::PARAM_STR);
        $statement->bindParam(":discord", $discord, PDO::PARAM_STR);
        $statement->bindParam(":nickname", $nickname, PDO::PARAM_STR);
		$statement->bindParam(":drzavljanstvo", $drzavljanstvo, PDO::PARAM_STR);
        $statement->bindParam(":ekipa", $ekipa, PDO::PARAM_STR);
        $statement->execute();

        $statement = $db->prepare("SELECT LAST_INSERT_ID()");
        $statement->execute();

        return $statement->fetchColumn();
    }
	
	
	
}
?>