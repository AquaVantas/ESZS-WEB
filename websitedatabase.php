<?php

class websiteDatabase {

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
	
	public static function addAdmin($email, $password, $ime, $priimek) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO eszs_admins(email, password, ime, priimek)
                                   VALUES(?, ?, ?, ?)");

        $statement->bindParam(1, $email, PDO::PARAM_STR);
		$statement->bindParam(2, $password, PDO::PARAM_STR);
		$statement->bindParam(3, $ime, PDO::PARAM_STR);
		$statement->bindParam(4, $priimek, PDO::PARAM_STR);

        $statement->execute();
    }
	
	public static function getAllAdmins() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT email, password FROM eszs_admins");

        $statement->execute();

        return $statement->fetchAll();
    }
	
	public static function addTeam($imeEkipe, $okrajsavaEkipe) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO ekipa(naziv, nazivOkrajsava)
                                   VALUES(?, ?)");

        $statement->bindParam(1, $imeEkipe, PDO::PARAM_STR);
		$statement->bindParam(2, $okrajsavaEkipe, PDO::PARAM_STR);

        $statement->execute();
    }
	
	public static function getAllTeams() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT ekipaID, naziv, nazivOkrajsava FROM ekipa");

        $statement->execute();

        return $statement->fetchAll();
    }
	
	public static function getAllMembers() {
		$db = self::getInstance();

        $statement = $db->prepare("SELECT seznamIgralcev.igralecID, seznamIgralcev.stIgralca, seznamIgralcev.ime, seznamIgralcev.priimek,
								   seznamIgralcev.vzdevek, seznamIgralcev.datumRegistracije, 
								   seznamIgralcev.potekRegistracije, seznamIgralcev.email,
								   seznamIgralcev.phone, seznamIgralcev.ulica, seznamIgralcev.kraj,
								   seznamIgralcev.posta, seznamIgralcev.datumRojstva, igre.naziv, ekipa.naziv, ekipa.nazivOkrajsava, organizacija.naziv,
								   seznamIgralcev.clan, drzavljanstvo.naziv
								   FROM seznamIgralcev
								   INNER JOIN igralecIgraIgro ON seznamIgralcev.igralecID=igralecIgraIgro.igralecID
								   INNER JOIN igre ON igralecIgraIgro.igraID=igre.igraID
								   INNER JOIN igralecPripadaEkipi ON seznamIgralcev.igralecID=igralecPripadaEkipi.igralecID
								   INNER JOIN ekipa ON igralecPripadaEkipi.ekipaID=ekipa.ekipaID
								   INNER JOIN igralecPripadaOrganizaciji ON igralecPripadaOrganizaciji.igralecID=seznamIgralcev.igralecID
								   INNER JOIN organizacija ON igralecPripadaOrganizaciji.organizacijaID=organizacija.organizacijaID
								   INNER JOIN igralecImaDrzavljanstvo ON seznamIgralcev.igralecID=igralecImaDrzavljanstvo.igralecID
								   INNER JOIN drzavljanstvo ON igralecImaDrzavljanstvo.drzavljanstvoID=drzavljanstvo.drzavljanstvoID
								   ORDER BY seznamIgralcev.igralecID ASC;");

        $statement->execute();

        return $statement->fetchAll();		
	}
	
	
}
?>