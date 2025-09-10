<?php
    $json = file_get_contents(__DIR__ ."/../data/stock.json");
    $datas = json_decode($json, true);
   