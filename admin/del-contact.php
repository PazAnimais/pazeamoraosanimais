<?php

	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	include('config/verifica_login.php');
	require 'config/conexao.php';

	$id = $_GET['id'];
	$del = mysqli_query($conexao,"delete from contatos where id = '$id'");

	if($del) {
		mysqli_close($conexao);
		echo "<script>alert('Exclusão realizada com sucesso!'); window.top.location.href = 'contatos.php';</script>";
		exit;	
	}	else {
		echo "Error deleting record";
		echo "<script>alert('Erro ao excluir. Por favor, tente novamente!');</script>";
	}