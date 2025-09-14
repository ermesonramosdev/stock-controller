<?php
    include_once(__DIR__ . "/../connection/connection.php");

    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $nameProduct = $_POST['nameProduct'];
        $priceProduct = $_POST['priceProduct'];

        if($nameProduct && $priceProduct) {
            $sql = "INSERT INTO products (nameProduct, priceProduct) VALUES (?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nameProduct, $priceProduct]);

            header("Location: ../index.php");
            exit;
        }
    };
?>