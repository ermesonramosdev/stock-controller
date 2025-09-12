<?php include('stock/stock.php')?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Controle de estoques</title>
</head>
<body>
    <button id="openModal">Abrir Modal</button>
    <table id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do produto</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($datas as $data) {
                    echo "<tr>";
                        echo "<td>" . $data['id'] . "</td>";
                        echo "<td>" . $data['nome'] . "</td>";
                        echo "<td>" . $data['preco'] . "</td>";
                        echo "<td>
                                <button> <i class='fa fa-check'> </i> </button>" ."
                                <button><i class='fa fa-times'></i></button>
                            </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table> 
    
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Estoque do Mercado</h2>
            <?php 
                foreach($qtdProduct as $nameProduct => $amount) {
                    foreach($qtdTotal as $namePrice => $price) {
                        if ($nameProduct == $namePrice) {
                            echo "<p>" . "<strong>" . $nameProduct . "</strong>" . ":" . $amount . "<strong> valor total: </strong>" . $price . "</p>" . "</hr>";
                        }
                    }
                }
            ?>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>