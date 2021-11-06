<h1>Editar ItensVenda</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR ITENSVENDA</title>
</head>
<body>
    <form action="../update/{{$itensvenda->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">IdVenda:</label>
        <input type="text" name="idvenda" id="idvenda" value="{{$venda->id}}">
        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" value="{{$itensvenda->quantidade}}">
        
        
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>