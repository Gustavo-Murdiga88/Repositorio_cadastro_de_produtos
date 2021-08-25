
<html lang="pt">
	<head>
    	<meta charset="UTF-8">
    		<title>CRUD - PHP COM MYSQL </title>
        		<link rel="stylesheet" href="css/materialize.min.css">
		        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	</head>


	<body>
			<h3> CONSULTA GERAL DE DADOS</h3>
				<?php
					function convertedata($datas_){
						$data_vetor = explode('-', $datas_);
						$novadata = implode('/', array_reverse($data_vetor));
						return $novadata;
					}	

					include_once('conexao.php');

					if(isset($_GET['id'])){
						$id = $_GET['id'];
					}else{
						header('Location: consulta.php');
					}

					//Realizando a pesquisa com o ID recebido
					$sql = "SELECT * FROM tabelaimg where id = $id"; 
					$resultado = mysqli_query($conexao, $sql);

					$dados = mysqli_fetch_array($resultado);

					// Listando os registros do banco

					if(!$resultado){
						echo '<input type="button" onclick="window.location='."'lista_de_dados.php'".
						';" value = "voltar"><br><br>';
						die('<b> Query inválida:</b>'.@mysqli_error($conexao));
					}
								echo "<table border = '0px'><tr><td width = '250px'>";
					 //buscando informações na pasta imagens
                                if (empty($dados['imagem'])) {
                                    $imagem = 'SemImagem.png';
                                } else {
                                    $imagem = $dados['imagem'];
                                }
                               
                               	echo "<img src ='imagens/$imagem'>";
                               	echo "</td>";

                               	echo "<td width = '400px'>";
                               	echo "<b>Data:</b>".convertedata($dados['datas_'])."<br>";
                               	echo "<b>ID:</b>".($dados['id'])."<br>";
                               	echo "<b>Produto:</b>".($dados['produto'])."<br>";
                               	echo "<b>Descrição:</b>".($dados['descricao'])."<br>";
                               	echo "<b>Valor:</b>".($dados['valor'])."<br>";	
                               	echo "</tr></td></table>";

                               	mysqli_close($conexao);
                            
                ?>       

                <a href="lista_de_dados.php" class="btn">Lista de Produtos</a>
						



	</body>

</html>
