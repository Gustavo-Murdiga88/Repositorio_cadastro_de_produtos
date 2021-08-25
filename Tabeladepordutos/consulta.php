	

	<?php 

		include_once('conexao.php'); 
		
		$sql = "SELECT * FROM tabelaimg";	

			$resultado = mysqli_query($conexao, $sql);

			if(mysqli_num_rows($resultado) > 0)
			{
				while($dados = mysqli_fetch_array($resultado))
				{
				
				echo "<br>"; 
				echo "<b>Código: 	</b> ".$dados['codigo'] ."<br>";
				echo "<b>Produto: 	</b> " .$dados['produto'] ."<br>";
				echo "<b>Descrição: </b> ".$dados['descricao'] . "<br>";
				echo "<b>Imagem: 	</b> ".$dados['imagem']."<br>";
				echo "<b>Valor: 	</b> ".$dados['valor']."<br>";
				}

			}
			mysqli_close($conexao);
	?>	

