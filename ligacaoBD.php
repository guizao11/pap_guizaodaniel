<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        FUNCTION ligaBD(){
           $con = new Mysqli("localhost", "root","","gestao_negocios");
           
           if($con->connect_error!=0){
            echo "Ocorreu um erro no acesso à base de dados". $con->connect_error;
            exit;
           }
           return $con;
        }
    ?>
</body>
</html>