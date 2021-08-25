<?php
	
		include_once('conexao.php');

			if(isset($_POST['btn-alterar']))
			{
				$codigo = $_POST['codigo'];
				$descricao	= $_POST['descricao'];
				$valor	= $_POST['valor'];
				$id = $_POST['id']; 

				$sql =" UPDATE tabelaimg SET codigo = '$codigo', descricao = '$descricao',
				valor = '$valor', id = '$id' WHERE id = '$id'";

						if(mysqli_query($conexao, $sql))
						{
							echo "Atualizado com Sucesso!";
							header('Location: lista_de_dados.php'); 
						}
						else
						{	
							echo "Erro ao atualizar"; 
							header('Location: lista_de_dados.php'); 
						}
			}
?>