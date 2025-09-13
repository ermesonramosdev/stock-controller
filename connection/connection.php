<?php 
    $localhost = 'localhost';
    $dbname = 'bd_stockController';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$localhost;dbname=$dbname", $user, $password);
    } catch (PDOException $e) {
        echo "Banco de dados não conectado: " . $e;
    }
?>