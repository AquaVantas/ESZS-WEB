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

        $statement = $db->prepare("SELECT adminID, email, password FROM eszs_admins");

        $statement->execute();

        return $statement->fetchAll();
    }
	
	public static function getAllPermissions() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT adminID, permissionID FROM is_user_permitted");

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
	
	public static function addOrganization($imeOrganizacije) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO organizacija(naziv)
                                   VALUES(?)");

        $statement->bindParam(1, $imeOrganizacije, PDO::PARAM_STR);

        $statement->execute();
    }
	
	public static function getAllOrganizations() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT organizacijaID, naziv FROM organizacija");

        $statement->execute();

        return $statement->fetchAll();
    }
	
	public static function addMember($playerNumber, $name, $surname, $nickname, $datumRegistracije, $potekRegistracije, $email, $phone, $street, $city, $postal, $birth, $clan) {
		$db = self::getInstance();
		
		$statement = $db->prepare("	INSERT INTO seznamIgralcev (stIgralca, ime, priimek, vzdevek, datumRegistracije, 
									potekRegistracije, email, phone, ulica, kraj, posta, datumRojstva, clan)
									VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		
		$statement->bindParam(1, $playerNumber, PDO::PARAM_STR);
		$statement->bindParam(2, $name, PDO::PARAM_STR);
		$statement->bindParam(3, $surname, PDO::PARAM_STR);		
		$statement->bindParam(4, $nickname, PDO::PARAM_STR);
		$statement->bindParam(5, $datumRegistracije, PDO::PARAM_STR);
		$statement->bindParam(6, $potekRegistracije, PDO::PARAM_STR);
		$statement->bindParam(7, $email, PDO::PARAM_STR);
		$statement->bindParam(8, $phone, PDO::PARAM_STR);
		$statement->bindParam(9, $street, PDO::PARAM_STR);
		$statement->bindParam(10, $city, PDO::PARAM_STR);
		$statement->bindParam(11, $postal, PDO::PARAM_STR);
		$statement->bindParam(12, $birth, PDO::PARAM_STR);
		$statement->bindParam(13, $clan, PDO::PARAM_STR);

        $statement->execute();
		
		
	}
	
	public static function getAllMembers() {
		$db = self::getInstance();

        $statement = $db->prepare("SELECT seznamIgralcev.igralecID AS igralecID, seznamIgralcev.stIgralca AS stIgralca, seznamIgralcev.ime AS ime, seznamIgralcev.priimek AS priimek,
								   seznamIgralcev.vzdevek AS vzdevek, seznamIgralcev.datumRegistracije AS datumRegistracije, 
								   seznamIgralcev.potekRegistracije AS potekRegistracije, seznamIgralcev.email AS email,
								   seznamIgralcev.phone AS phone, seznamIgralcev.ulica AS ulica, seznamIgralcev.kraj AS kraj,
								   seznamIgralcev.posta AS posta, seznamIgralcev.datumRojstva AS datumRojstva, igre.naziv AS igra, ekipa.naziv AS ekipa, ekipa.nazivOkrajsava AS ekipaOkrajsava, organizacija.naziv AS organizacija,
								   seznamIgralcev.clan AS clan, drzavljanstvo.naziv AS drzavljanstvo
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
	
	public static function getLastMember() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT MAX(igralecID) AS lastPlayer FROM seznamIgralcev;");

        $statement->execute();

        return $statement->fetchAll();
    }
	
	public static function getAllGames() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT igraID, naziv FROM igre");

        $statement->execute();

        return $statement->fetchAll();
    }
	
	public static function getAllNationalities() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT drzavljanstvoID, naziv FROM drzavljanstvo");

        $statement->execute();

        return $statement->fetchAll();
    }
	
	public static function addPlayerToOrganization($igralecID, $organizacijaID, $datumRegistracije) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO igralecPripadaOrganizaciji(igralecID, organizacijaID, odDneva)
                                   VALUES(?, ?, ?)");

        $statement->bindParam(1, $igralecID, PDO::PARAM_STR);
		$statement->bindParam(2, $organizacijaID, PDO::PARAM_STR);
		$statement->bindParam(3, $datumRegistracije, PDO::PARAM_STR);

        $statement->execute();
    }
	
	public static function addPlayerToTeam($igralecID, $ekipaID, $datumRegistracije) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO igralecPripadaEkipi(igralecID, ekipaID, odDneva)
                                   VALUES(?, ?, ?)");

        $statement->bindParam(1, $igralecID, PDO::PARAM_STR);
		$statement->bindParam(2, $ekipaID, PDO::PARAM_STR);
		$statement->bindParam(3, $datumRegistracije, PDO::PARAM_STR);

        $statement->execute();
    }
	
	public static function addPlayerNationality($igralecID, $drzavljanstvoID) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO igralecImaDrzavljanstvo(igralecID, drzavljanstvoID)
                                   VALUES(?, ?)");

        $statement->bindParam(1, $igralecID, PDO::PARAM_STR);
		$statement->bindParam(2, $drzavljanstvoID, PDO::PARAM_STR);

        $statement->execute();
    }
	
	public static function addPlayerGame($igralecID, $igraID) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO igralecIgraIgro(igralecID, igraID)
                                   VALUES(?, ?)");

        $statement->bindParam(1, $igralecID, PDO::PARAM_STR);
		$statement->bindParam(2, $igraID, PDO::PARAM_STR);

        $statement->execute();
    }
	
}
?>