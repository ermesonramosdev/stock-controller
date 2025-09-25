<?php
    require_once __DIR__ . '/../Core/Database.php';

    class Product {

        // Função para pegar todos os dados.
        public static function all () 
        {
            $db = Database::getConnection();
            return $db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
        }

        // Função para criar elementos na tabela
        public static function create ($dados) 
        {
            $db = Database::getConnection();
            $stmt = $db->prepare("INSERT INTO products (nameProduct, priceProduct) VALUES (?,?)");
            $stmt->execute([$dados['nameProduct'], $dados['priceProduct']]);
        }

        // Função para update dos elementos na tabela
        public static function update ($id, $dados)
        {
            $db = Database::getConnection();
            $stmt = $db->prepare("UPDATE products SET nameProduct=?, priceProduct=? WHERE id=?");
            $stmt->execute([$dados['nameProduct'], $dados['priceProduct'], $id]);
        }
    }