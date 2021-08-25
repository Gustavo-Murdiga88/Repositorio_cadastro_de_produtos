	
	<head>
		<title>Realizando Cadastro</title>
			<!--
		        <link rel="stylesheet" href="css/materialize.min.css">
		        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    -->
		    <!-- Compiled and minified CSS -->
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>

	<body>	
		<div class="row">
			<div class="col s12 m6 push-m3">
					<h3 class="lights">Cadastro de usários!!</h3>

				<?php 
					include_once('conexao.php'); 
					$nome = $_POST['nome'];
					$email = $_POST['email'];
					$usuario = $_POST['usuario'];
					$senha = $_POST['senha'];

				
						$sqlinsert = "insert into usuarios(nome, email, usuario, senha) values('$nome','$email','$usuario','$senha')";

					$resultado = mysqli_query($conexao, $sqlinsert); 
					if (!$resultado){
						die('Query inválida: ' .mysqli_error($conexao));	
					}else{
						echo "Registro realizado com sucesso";
					}
					mysqli_close($conexao);
				?>	
					<br><br>
				<input type="button"class="btn" onclick="window.location='login.php';" value="voltar">
				<!--
				<input type="button"class="btn" onclick="window.location='Cadastro_de_usuarios.php';" value="voltar"> -->
		</div>	
	</div>

	</body>
