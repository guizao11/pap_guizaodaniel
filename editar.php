<?php

include 'ligacaoBD.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $result = $conn->query($sql);
}   

if ($result->num_rows > 0) {
    $produto = $result->fetch_assoc();
} else {
    echo "Produto não encontrado";
    exit;
}

if ($_SERVER"REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $sql = "UPDATE produtos SET nome = '$nome', preco = '$preco', descricao = '$descricao', quantidade='$quantidade' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Produto atualizado com sucesso";
    } else {
        echo "Erro ao atualizar o produto: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar </title>
</head>
<body>

<header>
    <h1> Editar Produto </h1>
    <nav> 
        <a href="index.php"> Voltar </a>
        <a href = "produtos.php"> Produtos </a>
        <a href = "vendas.php"> Vendas </a>
    </nav>
</header>

<section id="editar-produto">
    <form action = "editar.php" method = "POST">
        <input type = "hidden" name = "id" value = "<?php echo $produto['id']; ?>">
        <label for = "nome"> Nome: </label>
        <input type = "text" name = "nome" value = "<?php echo $produto['nome']; ?>">
        <label for = "preco"> Preço: </label>
        <input type = "text" name = "preco" value = "<?php echo $produto['preco']; ?>">
        <label for = "descricao"> Descrição: </label>
        <input type = "text" name = "descricao" value = "<?php echo $produto['descricao']; ?>">
        <label for = "quantidade"> Quantidade: </label>
        <input type = "text" name = "quantidade" value = "<?php echo $produto['quantidade']; ?>">
        <button type = "submit"> Atualizar </button>
    </form>
    
</body>
</html>