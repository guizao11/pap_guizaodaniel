<?php 
include 'ligacaoBD.php';

// Recebe os valores do formulário
$nomeproduto = $_POST['nomeproduto']; 
$descricao = $_POST['descricao']; 
$preco = $_POST['preco']; 
$stock = $_POST['stock'];   

$sql = "INSERT INTO produtos (nomeproduto, descricao, preco, stock) VALUES ('$nomeproduto', '$descricao', '$preco', '$stock')"; // Insere os valores na tabela produtos
if ($conn->query($sql) === TRUE) {
    header('Location: ../produtos.php'); 
    echo "Produto adicionado com sucesso";
} else {
    echo "Erro ao adicionar produto: " . $sql . "<br>" . $conn->error; // Caso aconteça um erro ao adicionar o produto mostra uma mensagem de erro 
}

$conn->close();
?>