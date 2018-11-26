<?php
	//sessão
	session_start();
	//Conexão
	require_once 'db_connect.php'; 

	if (isset($_POST['btn-editar-func'])):
		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
		$sobrenome = mysqli_escape_string($connect, $_POST['cpf']);
		$email = mysqli_escape_string($connect, $_POST['email']);
		$rua = mysqli_escape_string($connect, $_POST['rua']);

		$id = mysqli_escape_string($connect, $_POST['id']);

		$sql = "UPDATE funcionarios SET nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf', email = '$email', rua = '$rua' WHERE id = '$id'";

		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Atualizado com secesso!";
			header('Location: ../funcionarios.php');
		}else{
			$_SESSION['mensagem'] = "Erro ao atualizar";
			header('Location: ../funcionarios.php');
		}
	endif;
		
	
 ?>