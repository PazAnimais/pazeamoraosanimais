<?php

require 'admin/config/conexao.php';

$subjectPrefix = '((CONTATO DO SITE))';

$nome     					= trim($_POST['nome']);
$endereco					= trim($_POST['endereco']);
$cep						= trim($_POST['cep']);
$cidade 					= trim($_POST['cidade']);
$telefone 					= trim($_POST['telefone']);
$mensagem 					= trim($_POST['mensagem']);
$emaildestinatario 			= 'contato@servegano.com.br';

$sql = "INSERT INTO contatos SET nome = '$nome', endereco = '$endereco', cep = '$cep', cidade = '$cidade', telefone = '$telefone'";

if ($conexao->query($sql) === TRUE) {

	$assunto = '((CONTATO DO SITE))';

	$mensagemHTML = '<P>Seguem dados do contato:</P>
	<p><b>Nome:</b> ' . $nome . '
	<p><b>Endereço:</b> ' . $endereco . '
	<p><b>CEP:</b> ' . $cep . '
	<p><b>Cidade:</b> ' . $cidade . '
	<p><b>Telefone:</b> ' . $telefone . '
	<p><b>Mensagem/Pedido:</b> ' . $mensagem . '
	<hr>';

	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: $nome\r\n";
	// $headers .= 'Cc: contato@servegano.com.br' . "\r\n";
	$headers .= 'Bcc: captacao@labarba.com.br' . "\r\n";
	$headers .= "Return-Path: $emaildestinatario \r\n";
	$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);

	if ($envio)
		echo "<script>alert('Sucesso! Entraremos em contato em breve!'); window.top.location.href = '/';</script>";
} else {
	echo "<script>alert('Erro! Por favor, tente novamente.');</script>";
}