<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pedidos</title>
</head>
<body>
    <h1>Listagem de todos os pedidos</h1>
    <?php
    $conexao = mysqli_connect("localhost", "root", "", "lanchonete");
    $sql_pesquisar = "select * from tabela_pedidos";
    $resultado = mysqli_query($conexao, $sql_pesquisar);
    while($linha = mysqli_fetch_assoc ($resultado)){
        echo "Produto: {$linha['produto']} ";
        echo "Total: {$linha['total']} ";
        echo "Observações: {$linha['observacoes']} ";
        echo "Entrega ou Retirada: {$linha['entregaRetirada']} ";
        echo "Informações do Cliente: {$linha['informacoesClientes']} ";
        echo "<br>";
    }
    
    mysqli_close($conexao);
    ?>
</body>
</html>