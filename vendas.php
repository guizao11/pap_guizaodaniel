<?php 
include 'ligacaoBD.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gestão das Vendas </title>
</head>
<body>

    <header>
        <h1> Vendas </h1>
        <nav> 
            <a href="index.php"> Voltar </a>
            <a href = "produtos.php"> Produtos </a>
            <a href = "vendas.php"> Vendas </a>
        </nav>
    </header>

    <section id="vendas">
        <h2> Registar Nova Venda </h2>
        <form action = "vendas.php" method="POST" >
            <label for = "produto"> Produto: </label>
            <select name = "produto" id = "produto">
                <?php
                $sql = "SELECT * FROM produtos";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value = '" . $row['id'] . "'>" . $row['nome']." - " .$row['preco']."€ (".$row['quantidade']." em stock </option>";
                }
                ?>
            </select>
            <input type = "number" name = "quantidade" id = "quantidade" placeholder = "Quantidade" required>
            <button type = "submit"> Registar Venda </button>
        </form>

        <h2> Histórico de Vendas </h2>
        <?php include 'lista_vendas.php'; ?>
            </section>
    
</body>
</html>