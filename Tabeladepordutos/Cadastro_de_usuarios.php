<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuários</title>

	<!--
        <link rel="stylesheet" href="css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>

	<section class ="row">	
		<div class="col s12 m6 push-m3">
			<h3 class = "light"> Casdastro de usuários </h3>

			<form action="cadastro_banco_usuarios" method="POST">
				<div class="input-field col s12">
					<label for ="nome">Nome:</label><br>
					<input type="text" name="nome" id ="nome"><br>
				</div>

				<div class="input-field col s12">
					<label for ="nome">Email:</label><br>
					<input type="text" name="email" id ="email"><br>
				</div>		

				<div class="input-field col s12">
					<label for="nome">Usuário:</label><br>
					<input type="text" name="usuario" id ="usuario"><br>
				</div>

				<div class="input-field col s12">
					<label for ="nome">Senha:</label><br>
					<input type="password" name="senha" id ="usuario"><br>
				</div>
				<br>

				<button type="submit" name="btn-alterar" class="btn">Cadastrar</button> &nbsp &nbsp

				<a href="login.php" > Já possuí cadastro? Faça o Login</a>


		</div>
	</section>


			</form>
</body>
</html>