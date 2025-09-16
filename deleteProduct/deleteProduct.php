<?php 
    include_once(__DIR__ . "/../connection/connection.php");

    $sql = "DELETE FROM products WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);

    header("Location: ../index.php");
?>