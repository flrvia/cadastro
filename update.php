<?php
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$marca = mysqli_escape_string($connect, $_POST['marca']);
	$preço = mysqli_escape_string($connect, $_POST['preço']);
	$quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE produtos SET nome = '$nome', marca = '$marca', preço = '$preço', quantidade = '$quantidade' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../areaprivada.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar!";
		header('Location: .../areaprivada.php');
	endif;
endif;
