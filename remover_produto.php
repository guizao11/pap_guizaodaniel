<?php
include 'ligacaoBD.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $result = $conn->query($sql);
}

if ($conn->query($sql) === TRUE) {
    echo "Produto removido com sucesso";
    header("Location: produtos.php");
} else {
    echo "Erro ao remover o produto: " . $conn->error;
}

$conn->close();
?>