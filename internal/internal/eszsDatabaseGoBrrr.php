<?php

class database {

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
	
	public static function addMedij($ime) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO medij(medijIme)
                                   VALUES(?)");

        $statement->bindParam(1, $ime, PDO::PARAM_STR);

        $statement->execute();
    }
	
	public static function getAllMedij() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT medijID, medijIme FROM medij ORDER BY medijIME ASC");

        $statement->execute();

        return $statement->fetchAll();
    }
	
	public static function addTip($ime) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO tip(tipIme)
                                   VALUES(?)");

        $statement->bindParam(1, $ime, PDO::PARAM_STR);

        $statement->execute();
    }
	
	public static function getAllTip() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT tipID, tipIme FROM tip ORDER BY tipIme ASC");

        $statement->execute();

        return $statement->fetchAll();
    }
	
	public static function addDelavec($ime, $priimek, $naziv, $mail, $phone, $odzivnost, $medijID, $tipID) {
        $db = self::getInstance();

        $statement = $db->prepare("INSERT INTO kontaktDelavec(ime, priimek, naziv, mail, phone, odzivnost, medijID, tipID)
                                   VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

		$statement->bindParam(1, $ime, PDO::PARAM_STR);
		$statement->bindParam(2, $priimek, PDO::PARAM_STR);
		$statement->bindParam(3, $naziv, PDO::PARAM_STR);
		$statement->bindParam(4, $mail, PDO::PARAM_STR);		
		$statement->bindParam(5, $phone, PDO::PARAM_STR);		
		$statement->bindParam(6, $odzivnost, PDO::PARAM_STR);
		$statement->bindParam(7, $medijID, PDO::PARAM_STR);
		$statement->bindParam(8, $tipID, PDO::PARAM_STR);
		

        $statement->execute();
    }
	
	public static function getAllDelavec() {
        $db = self::getInstance();

        $statement = $db->prepare("SELECT medij.medijIme AS medij, tip.tipIme AS tip, kontaktDelavec.ime AS ime, kontaktDelavec.priimek AS priimek, kontaktDelavec.naziv AS naziv, kontaktDelavec.mail AS mail, kontaktDelavec.phone AS phone, kontaktDelavec.odzivnost AS odzivnost
									FROM kontaktDelavec
									INNER JOIN medij ON medij.medijID = kontaktDelavec.medijID
									INNER JOIN tip ON tip.tipID = kontaktDelavec.tipID");

        $statement->execute();

        return $statement->fetchAll();
    }
}
?>