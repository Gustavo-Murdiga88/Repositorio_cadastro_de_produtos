<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login|EtecJAHU</title>

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
				<h3 class = "light"> Login </h3>

				<form action="autentica.php" method="POST">
					<div class="input-field col s12">
						<label for ="nome">Login:</label><br>
						<input type="text" name="Login" id ="Login"><br>
					</div>

					<div class="input-field col s12">
						<label for ="nome">Senha:</label><br>
						<input type="password" name="senha" id ="senha"><br>
					</div>		

					<button type="submit" name="btn-Login" class="btn">Login</button> &nbsp &nbsp

					<a href="" >Esqueceu a senha?</a> &nbsp
			</div>
		</section>


			</form>
	</body>
</html>