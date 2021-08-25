	
	<head>
		<title>Incluindo PHP</title>
		<!--
		        <link rel="stylesheet" href="css/materialize.min.css">
		        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    -->
		    <!-- Compiled and minified CSS -->
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>

	<body>
			<h3 class="light" align='center'>Novo Produto</h3>
			<div class="col s12 m6 push-m3">
				<?php 
					include_once('conexao.php'); 
					$codigo = $_POST['codigo'];
					$produto = $_POST['produto'];
					$descricao = $_POST['descricao'];
					$data = $_POST['data'];
					$imagem = $_POST['imagem'];
					$valor = $_POST['valor'];
				$sqlinsert = "insert into tabelaimg(codigo,produto, descricao,datas_,imagem,valor) values('$codigo','$produto','$descricao','$data','$imagem',$valor)";
					$resultado = mysqli_query($conexao, $sqlinsert); 
					if (!$resultado){
						die('Query inválida: ' .mysqli_error($conexao));	
					}else{
						echo "<p claas ='light' align ='center'> Registro realizado com sucesso </p>";
					}
					mysqli_close($conexao);
				?>	
					<br>
				<input type="button" class="btn" onclick="window.location='Formulariocomobanco.php';" value="voltar" style="margin-left: 650px;">
			</div>
	</body>


