<?php
	
	include_once('conexao.php');

		if(isset($_GET['id'])){

			$id = $_GET['id'];
		}


		$sql = "DELETE FROM tabelaimg WHERE id = '$id'";
		$resultado = mysqli_query($conexao, $sql); 


			if($resultado){
				function myalert($msg, $url){
					echo '<script language="javascript">alert("'.$msg.'");</script>';
					echo "<script>document.location = '$url'</script>";
				}
				myalert("Registro Excluído com Sucesso!","lista_de_dados.php");
			}else{
				die('Não foi possível excluir o registro:' . mysqli_error($conexao));
			}

			mysqli_close($conexao);
?>