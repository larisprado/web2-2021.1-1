<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens Entradas|Cadastro</title>
</head>
<body>
    <h1>Cadastrar Itens Entrada</h1>
    <form action="store" method="POST">
        @csrf
        <label for="">Identrada:</label>
        <input type="text" name="identrada" id="identrada">

        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade">
        
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>