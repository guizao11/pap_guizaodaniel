<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusinessUP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	<form action="adicionar_registo.php" method="post">
        <table>
            <tr>
                <td> <label for="uname" value=""><b>Nome produto: </b></label></td>
                <td> <input type="text" name="nome" required></td>
            </tr>

            <tr>
				<td><label for="uname" value=""><b>Descrição:</b></label></td>
                <td><input type="text" name="descricao" required>td>
            </tr>  
            
            <tr>
				<td><label for="uname" value=""><b>Preço:</b></label></td>
                <td><input type="text" name="preco" required></td>
            </tr>
            
            <tr>
                <td><label for="uname" value=""><b>Quantidade:</b></label></td>
                <td><input type="text" name="quantidade" required></td>
            </tr>
            
            <tr>
                <td><button type="submit">Adiciona Produto</button></td>
            </tr>
        </table>
	</form>
</body>
</html>