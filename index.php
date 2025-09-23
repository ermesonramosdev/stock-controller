<?php include_once("./stock/stock.php")?>

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
    <!-- Botão para abrir modal para visualiar a quantidade dos itens no banco de dados -->
    <button id="openModal">Abrir Modal</button>
    <!--Tabela principal -->
    <table id="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do produto</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <!-- Exibir os dados do banco de dados na tabela -->
        <tbody>
            <?php 
                foreach ($datas as $data) {
                    echo "<tr>";
                        echo "<td>" . $data['id'] . "</td>";
                        echo "<td id='nameProduct'>" . $data['nameProduct'] . "</td>";
                        echo "<td id='priceProduct'>" . $data['priceProduct'] . "</td>";
                        echo "<td>
                                <button class='confirm'> <i class='fa fa-check'> </i> </button>" ."
                                <a href='./deleteProduct/deleteProduct.php?id=" . $data['id'] . "' 
                                    onclick='return confirm(\"Tem certeza que deseja excluir?\")'>
                                    <button class='delete'><i class='fa fa-times'></i></button>
                                </a>" . "
                                <button class='edit'><i class='fa-solid fa-pen'></i> </button>
                            </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table> 
    <!-- Modal para exibir as quantidade de itens no banco de dados -->
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
    <!-- Modal para adicionar mais itens no banco de dados -->
    <div id="myModalAdd" class="modal">
       <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Adicionar mais elementos no estoque</h2>
            <form action="./insertProduct/insertProduct.php" method="post">
                <label for="nameProductAdd">Nome do produto:</label>
                <input type="text" name="nameProductAdd" id="nameProductAdd">
                <label for="priceProduct">Peço do produto:</label>
                <input type="number" name="priceProductAdd" id="priceProductAdd">
                <button type="submit">Enviar</button>
            </form>
       </div>         
    </div>  
     <!-- Modal para atualizar os itens no banco de dados -->
    <div id="myModalUpdate" class="modal">
       <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Atualizar os elementos no estoque</h2>
            <form action="./updateProduct/updateProduct.php" method="post" id="formUpdate">
                <label for="nameProductUpdate">Nome do produto:</label>
                <input type="text" name="nameProductUpdate" id="nameProductUpdate">
                <label for="priceProductUpdate">Peço do produto:</label>
                <input type="number" name="priceProductUpdate" id="priceProductUpdate">
                <button type="submit">Atualizar</button>
            </form>
       </div>         
    </div>                  
    <script src="js/script.js"></script>
</body>
</html>