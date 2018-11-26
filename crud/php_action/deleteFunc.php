<?php
	//sessão
	session_start();
	//Conexão
	require_once 'db_connect.php'; 
	
	if (isset($_POST['btn-deletar-func'])):
		$id = mysqli_escape_string($connect, $_POST['id']);
		$sql = "DELETE FROM funcionarios WHERE id = '$id'";

		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Deletado com secesso!";
			header('Location: ../funcionarios.php');
		}else{
			$_SESSION['mensagem'] = "Erro ao deletar";
			header('Location: ../funcionarios.php');
		}		
	endif;
 ?>