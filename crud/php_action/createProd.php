<?php
	//sessão
	session_start();
	//Conexão
	require_once 'db_connect.php'; 

	if (isset($_POST['btn-cadastrar-prod'])):
		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$preco = mysqli_escape_string($connect, $_POST['preco']);
		$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);

		$sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES ('$nome', '$preco', '$quantidade')";

		if (mysqli_query($connect, $sql)) {
			$_SESSION['mensagem'] = "Cadastrado com secesso!";
			header('Location: ../produtos.php');
		}else{
			$_SESSION['mensagem'] = "Erro ou cadastrar";
			header('Location: ../produtos.php');
		}
	endif;
		
	
 ?>