<?php
	//sessão
	session_start();
	//Conexão
	require_once 'db_connect.php'; 

	if (isset($_POST['btn-editar-prod'])):
		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$preco = mysqli_escape_string($connect, $_POST['preco']);
		$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);

		$id = mysqli_escape_string($connect, $_POST['id']);

		$sql = "UPDATE produtos SET nome = '$nome', preco = '$preco', quantidade = '$quantidade' WHERE id = '$id'";

		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Atualizado com secesso!";
			header('Location: ../produtos.php');
		}else{
			$_SESSION['mensagem'] = "Erro ao atualizar";
			header('Location: ../produtos.php');
		}
	endif;
		
	
 ?>