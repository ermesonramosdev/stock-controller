<?php
    $json = file_get_contents(__DIR__ ."/../data/stock.json");
    $datas = json_decode($json, true);

    //Olha a quantidade de produtos tem
    $qtdProduct = array_reduce($datas, function($accumulator, $currentItem) {
        if(!isset($accumulator[$currentItem['nome']])) {
            $accumulator[$currentItem['nome']] = 1;
        } else {
            $accumulator[$currentItem['nome']] += 1;
        }

        return $accumulator;
    }, []);
    //Olha o preço  de cada produto e soma tudo de acordo com cada chave
   $qtdTotal = array_reduce($datas, function($accumulator, $currentItem) {
        if(!isset($accumulator[$currentItem['nome']])) {
            $accumulator[$currentItem['nome']] = $currentItem['preco'];
        } else {
            $accumulator[$currentItem['nome']] += $currentItem['preco'];
        }

        return $accumulator;
   }, []);
