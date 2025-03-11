<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Conexão com a Base de Dados </title>
</head>
<body>

    <?php
    $servername = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $dbname = "pap" ;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    ?>
    
</body>
</html>