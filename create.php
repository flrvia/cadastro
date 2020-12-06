<?php
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$marca = mysqli_escape_string($connect, $_POST['marca']);
	$preço = mysqli_escape_string($connect, $_POST['preço']);
	$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);

	$sql = "INSERT INTO produtos (nome, marca, preço, quantidade) VALUES ('$nome','$marca','$preço','$quantidade')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../areaprivada.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar!";
		header('Location: .../areaprivada.php');
	endif;
endif;

	