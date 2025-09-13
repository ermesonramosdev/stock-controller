<?php
    include_once(__DIR__ . "/../connection/connection.php");
    
    $stmt = $pdo->query("SELECT * FROM products");
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Olha a quantidade de produtos tem
    $qtdProduct = array_reduce($datas, function($accumulator, $currentItem) {
        if(!isset($accumulator[$currentItem['nameProduct']])) {
            $accumulator[$currentItem['nameProduct']] = 1;
        } else {
            $accumulator[$currentItem['nameProduct']] += 1;
        }

        return $accumulator;
    }, []);
    //Olha o preço  de cada produto e soma tudo de acordo com cada chave
   $qtdTotal = array_reduce($datas, function($accumulator, $currentItem) {
        if(!isset($accumulator[$currentItem['nameProduct']])) {
            $accumulator[$currentItem['nameProduct']] = $currentItem['priceProduct'];
        } else {
            $accumulator[$currentItem['nameProduct']] += $currentItem['priceProduct'];
        }

        return $accumulator;
   }, []);

