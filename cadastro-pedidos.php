<?php

$conexao = mysqli_connect("localhost", "root", "", "lanchonete");

$produto = $_POST ['produto'];
$total = $_POST ['total'];
$observacoes = $_POST ['observacoes'];
$envio = $_POST ['envio'];
$info = $_POST ['info'];


$sql_inserir = "insert into tabela_pedidos(produto, total, observacoes, entregaRetirada, informacoesClientes) values ('{$produto}',{$total}, '{$observacoes}','{$envio}', '{$info}')";

echo $sql_inserir;

mysqli_query($conexao, $sql_inserir);


mysqli_close($conexao);
?>