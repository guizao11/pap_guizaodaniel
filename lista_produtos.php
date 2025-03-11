<?php
include 'ligacaoBD.php';

// Seleciona todos os produtos da Tabela
$sql = "SELECT * FROM produtos"; 
$results = $conn-query($sql); 

if ($results -> num_rows > 0)  {
    echo "<table>  
    <tr> 
    <th> ID </th>
    <th> Nome do Produto </th>
    <th> DEscrição </th>
    <th> Preço </th>
    <th> Stock </th>
    </tr>";
    while ($row = $results -> fetch_assoc()) {
        echo "<tr>
        <td>" . $row['id']. "</td>
        <td>" . $row['nomeproduto']. "</td>
        <td>" . $row['preco']. "€</td>
        <td>" . $row['stock']. "</td>
        </tr>";
}

    echo "</table>";
} else {
    echo "Nenhum produto encontrado.";
}

$conn->close();
?>