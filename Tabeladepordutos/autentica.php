

<meta charset="utf-8">
<?php
//Habilita gerenciamento de sessoes
session_start();
// Efetua a conexão com o DB
include_once ('conexao.php');
	
			if (!empty($_POST) AND (empty($_POST['Login']) OR empty($_POST['senha']))){
				function myAlert($msg, $url){
					echo '<script language="javascript">alert("'.$msg.'");</script>';
					echo "<script>document.location = '$url'</script>";
					}
					myAlert("Usuário ou Senha Incorretos! Verifique os dados inseridos",
						"login.php");
					exit;
				}
			//Recebe os dados enviados da login.php
			$usuario =$_POST['Login'];
			$senha =$_POST['senha'];
			//Montagem da instrução SQL que checa o usuario e senha no BD
			$sql = "select * from usuarios where usuario ='$usuario' and senha ='$senha'";
			//Executa a instrução SQL no BD
			$resultado = mysqli_query($conexao, $sql);
			//verificar o numero de linhas retornadas
			$linhas = mysqli_num_rows($resultado);
		//Direciona o usuário  ao menu opções
		if ($linhas==0){
		function myAlert($msg,$url){
		echo '<script language="javascript">alert("'.$msg.'");</script>';
		echo "<script>document.location = '$url'</script>";
		}
		myAlert("Usuário ou Senha Incorretos! Verifique os dados inseridos","login.php");
		}
		else{
			$_SESSION["autenticado"]="rfc822_allowed";
			$_SESSION["usuario"]=$usuario;
			header("Location: _index.php");
		}
		?>
		