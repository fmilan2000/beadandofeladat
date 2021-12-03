<?php

class Database {
    public static $db;

    public static function initDB() {
        try {
            self::$db = new PDO('mysql:host=mysql.omega:3306;dbname=milan123;charset=utf8', 'milan123', 'asd123');
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		    self::$db->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        } catch(PDOException $ex) {
            echo "Adatbazis hiba tortent!";
        }
    }

    public static function find($table) {
        $stmt = self::$db->query('SELECT * FROM ' . $table);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public static function save($table, $columns, $values ) {
        try {
            self::$db->exec("INSERT INTO " . $table . " (" . implode(",", $columns) . ") VALUES ('" . implode("','",$values) ."')");
        } catch (PDOException $ex) {
            echo $ex;
        }
    }
}

