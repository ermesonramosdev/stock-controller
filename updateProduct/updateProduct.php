<?php 
    include_once(__DIR__ . "/../connection/connection.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $idProductUpdate = $_POST['idProductUpdate'];
        $nameProductUpdate = $_POST['nameProductUpdate'];
        $priceProductUpdate = $_POST['priceProductUpdate'];

        if (!empty($nameProductUpdate) && !empty($priceProductUpdate)) {
            echo $idProductUpdate . "</br>";
            echo $nameProductUpdate . "</br>";
            echo $priceProductUpdate;
        }
    }

    header("Location: ../index.php");
?>