<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pedidos</title>

</head>
<body>
    <h1>CADASTRO DE PEDIDOS</h1>
    <form action="cadastro-pedidos.php" method="post">
        Produto:<input name = "produto" id = "produtor"><br>
        Total: <input name = "total" id="total"><br>
        Observações:<br>
        <textarea name="observacoes" id="observacoes"></textarea><br>
        Entrega ou Retirada? <input name = "envio" id ="envio"><br>
        Informações do Cliente:<br>
        <textarea name="info" id = "info"></textarea><br>
        <button type="submit">Salvar</button>
</form>
</body>
</html>