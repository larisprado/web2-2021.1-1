<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ItensVendas|Cadastro</title>
</head>
<body>
    <h1>Cadastrar ItensVenda</h1>
    <form action="store" method="POST">
        @csrf
        <label for="">Idvenda:</label>
        <input type="text" name="idvenda" id="idvenda">

        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade">
        
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>
