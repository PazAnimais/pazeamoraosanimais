<?php

require_once 'config/conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];

$sql = "UPDATE contatos SET nome = '$nome', endereco = '$endereco', cep = '$cep', cidade = '$cidade', telefone = '$telefone' WHERE id = $id";

if (mysqli_query($conexao, $sql)) {
  echo "<script>alert('Alterações concluídas com sucesso'); window.top.location.href = 'contatos.php';</script>";
} else {
  echo "Error ao atualizar: " . mysqli_error($conexao);
}
mysqli_close($conexao);