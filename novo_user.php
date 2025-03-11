<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form action="verificacao.php" method="post">
					<label for="chk" aria-hidden="true"> Registo Utilizador </label>
					<input type="text" name="nomeuser" placeholder="Nome" required="">
					<input type="text" name="apelidouser" placeholder="Apelido" required="">
					<input type="text" name="emailuser" placeholder="Email" required="">
					<input type="text" name="passuser" placeholder="Password" required="">
					<button> Adicionar Registo </button>
				</form>
			</div>
	</div>
</body>
</html>