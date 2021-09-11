<?php

class DataBase
{
//    const USER = "andreyspace";
//    const PASS = "Helloern1";
//    const HOST = "localhost";
//    const NAME_DB = "andreyspace";
    const USER = "root";
    const PASS = "";
    const HOST = "localhost";
    const NAME_DB = "example";

    public static function connToDB() {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $name_db = self::NAME_DB;

        $conn= new PDO("mysql:dbname=$name_db;host=$host", $user, $pass);
        return $conn;
    }

}