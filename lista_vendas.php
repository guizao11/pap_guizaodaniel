<?php

include 'ligacaoBD.php';

$sql = "SELECT * FROM vendas";
$result = $conn->query($sql);

if ($result->num_rows > 0 ) {
    echo "<table>
    <tr>
    <th> ID </th>
    <th> Produto </th>
    <th> Quantidade </th>
    <th> Preço </th>
    <th> Total </th>
    <th> Data </th>
    </tr>"; 

    while ($row = $result->fetch_assoc()) {
        $sql = "SELECT * FROM produtos WHERE id = " . $row['id_produto'];
        $result_produto = $conn->query($sql);
        $produto = $result_produto->fetch_assoc();

        echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $produto['nome'] . "</td>
        <td>" . $row['quantidade'] . "</td>
        <td>" . $produto['preco'] . "€</td>
        <td>" . $row['total'] . "€</td>
        <td>" . $row['data'] . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "Nenhuma venda registada.";
}

$conn->close();
?>