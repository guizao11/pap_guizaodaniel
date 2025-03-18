<?php include 'ligacaoBD.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gestão de Produtos </title>
</head>
<body>
    <header> 
        <h1> Gstão dos Produtos </h1>
        <nav>
            <a href="index.php"> Dashboard </a>
            <a href = "produtos.php"> Produtos </a>
            <a href = "vendas.php"> Vendas </a>
        </nav>
    </header>

<section id="produtos">
    <h2> Adicionar Produto </h2>
    <form action ="php/adicionar_produto.php" method="post"> <!-- Envia o Formulário para a página adicionar produto com o método post -->
        <input type = "text" name="nomeproduto" placeholder="Nome do Produto" required>
        <textarea name="descricao" plkaceholder="Descrição" required></textarea>
        <input type="number" name="preco" placeholder="Preço" required>
        <input type="number" name="stock" placeholder="Stock" required>
        <button> Adicionar Produto </button>
    </form>

    <h2> Lista de Produtos </h2>
    <?php include 'php/lista_produtos.php'; ?>
    </section>

</body>
</html>