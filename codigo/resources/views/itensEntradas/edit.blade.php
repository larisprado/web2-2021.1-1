<h1>Editar Itens Entrada</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR ITENS ENTRADA</title>
</head>
<body>
    <form action="../update/{{$itensentrada->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Identrada</label>
        <input type="text" name="entrada" id="entrada" value="{{$entrada->id}}">
        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" value="{{$itensentrada->quantidade}}">
        
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>
