<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Alteração de dados</title>
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
			<h3 class="light">Alterar Produtos</h3>

				<?php

					include_once('conexao.php');

						if(isset($_GET['id']))
						{
							$id = $_GET['id'];
							$sql = "select * from tabelaimg where id = $id"; 
							$resultado = mysqli_query($conexao, $sql);
							$dados = mysqli_fetch_array($resultado);
						}
				?>

		<form action="update.php" method="POST">

				<input type="hidden" name="id" id ="id" value="<?php echo $dados['id'];?>">

				<div class="input-field col s12">
					<label for="nome">Código</label><br>
					<input type="text" name="codigo" id="codigo" value="<?php echo $dados['codigo'];?>">
				</div>

				<div class="input-field col s12">
				<label for="nome">Produto</label><br>
					<input type="text" name="produto" id="produto"
					 value="<?php echo $dados['produto'];?>">
				</div>


				<div class="input-field col s12">
					<label for="nome">Descrição</label><br>
					<input type="text" name="descricao" id="descricao" 
					value="<?php echo $dados['descricao'];?>">
				</div>


				<div class="input-field col s12">
					<label for="nome">Valor</label><br>
					<input type="text" name="valor" id="valor" value="<?php echo $dados['valor'];?>">
				</div>

				<button type="submit" name="btn-alterar" class="btn">Atualizar</button>
				<a href="lista_de_dados.php" class="btn green">Lista de Produtos</a>
			</form>
		</div>
	</div>
</body>
</html>