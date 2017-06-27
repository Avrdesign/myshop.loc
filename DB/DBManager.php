<?php

/**
 * Created by PhpStorm.
 * User: st
 * Date: 27.06.2017
 * Time: 20:16
 */

class DBManager
{
    const DB_HOST = 'localhost';
    const DB_USER_NAME = 'root';
    const DB_USER_PASSWORD = '';
    const DB_NAME = 'test';

    private static $db = null; //Единственный экземпляр класса, чтобы не создавать множественно
    private $connection;  //Идентификатор соединения

    private function __construct()
    {
        $this->connection = new mysqli(self::DB_HOST, self::DB_USER_NAME, self::DB_USER_PASSWORD, self::DB_NAME);
        $this->connection->query("SET lc_time_names='ru_RU'");
        $this->connection->query("SET NAMES 'utf-8'");
    }

    public function __destruct()
    {
        // destructor method
        if ($this->connection) {
            $this->connection->close();
        }
    }

    //Получение экземпляра класса
    public static function getDB(){
            if(self::$db == null) {
                self::$db = new DBManager();
            }
            return self::$db;
    }

    public function getAllData($tablename){
        $sql = "SELECT * FROM $tablename";
        $result = $this->connection->query($sql);
        $array = array();
        while($row = $result->fetch_assoc()){
            $array[] = $row;
            }
            return $array;
    }




}