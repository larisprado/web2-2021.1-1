<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas|Cadastro</title>
</head>
<body>
    <h1>Cadastrar Venda</h1>
    <form action="store" method="POST">
        @csrf
        <label for="">Idcliente:</label>
        <input type="text" name="idcliente" id="idcliente">

        <p><label for="">Valor total:</label>
        <input type="text" name="valortotal" id="valortotal">

        <p><label for="">Data:</label>
        <input type="text" name="datavenda" id="datavenda">
        
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>