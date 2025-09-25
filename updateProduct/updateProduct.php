<?php 
    include_once(__DIR__ . "/../connection/connection.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $idProductUpdate = $_POST['idProductUpdate'];
        $nameProductUpdate = $_POST['nameProductUpdate'];
        $priceProductUpdate = $_POST['priceProductUpdate'];

        if (!empty($idProductUpdate) && !empty($nameProductUpdate) && !empty($priceProductUpdate)) {
            $sql = "UPDATE products SET nameProduct=?, priceProduct=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nameProductUpdate, $priceProductUpdate, $idProductUpdate]);
        }
    }

    header("Location: ../index.php");
?>