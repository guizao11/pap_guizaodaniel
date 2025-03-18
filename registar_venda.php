<?php
include 'ligacaoBD.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];

    $sql = "SELECT * FROM produtos WHERE id = $id_produto";
    $result = $conn->query($sql);
    $produto = $result->fetch_assoc();

    if ($produto['quantidade'] >= $quantidade) {
        $sql = "INSERT INTO vendas (id_produto, quantidade) VALUES ($id_produto, $quantidade)";
        if ($conn -> query($sql) === TRUE) {
            $nova_quantidade = $produto['quantidade'] - $quantidade;
            $sql = "UPDATE produtos SET quantidade = $nova_quantidade WHERE id = $id_produto";
            if ($conn -> query($sql) === TRUE) {
                echo "Venda registada com sucesso";
                header("Location: vendas.php");
            } else {
                echo "Erro ao atualizar o stock: " . $conn->error;
            }
        } else {
            echo "Erro ao registar a venda: " . $conn->error;
        }
    }
}

    $conn->close();
?>
