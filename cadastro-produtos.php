<?php

&conexao = mysqli_connect("localhost", "root", "", "lanchonete")

$produto = $_POST ['produto'];
$preco = $_POST ['preco'];
$ingredientes = $_POST ['ingredientes'];
echo "{$produto} - {$preco} - {$ingredientes}";







  mysqli_close($conexao);
  ?>