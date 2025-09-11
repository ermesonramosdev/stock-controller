<?php
    $json = file_get_contents(__DIR__ ."/../data/stock.json");
    $datas = json_decode($json, true);

    $qtdTotal = array_reduce($datas, function($accumulator, $currentItem) {
        if(!isset($accumulator[$currentItem['nome']])) {
            $accumulator[$currentItem['nome']] = 1;
        } else {
            $accumulator[$currentItem['nome']] += 1;
        }

        return $accumulator;
    }, []);
   
    print_r($qtdTotal);