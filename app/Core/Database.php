<?php
    class Database {
        public static function getConnection() {
            $localhost = 'localhost';
            $dbname = 'bd_stockController';
            $user = 'root';
            $password = '';

            return new PDO("mysql:host=$localhost;dbname=$dbname", $user, $password);
        }
    }