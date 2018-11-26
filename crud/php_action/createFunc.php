<?php
	//sessão
	session_start();
	//Conexão
	require_once 'db_connect.php'; 

	if (isset($_POST['btn-cadastrar-func'])):
		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
		$cpf = mysqli_escape_string($connect, $_POST['cpf']);
		$email = mysqli_escape_string($connect, $_POST['email']);
		$rua = mysqli_escape_string($connect, $_POST['rua']);

		$sql = "INSERT INTO funcionarios (nome, sobrenome, cpf, email, rua) VALUES ('$nome', '$sobrenome', '$cpf', '$email', '$rua')";

		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Cadastrado com secesso!";
			header('Location: ../funcionarios.php');
		}else{
			$_SESSION['mensagem'] = "Erro ou cadastrar";
			header('Location: ../funcionarios.php');
		}
	endif;
		
	
 ?>