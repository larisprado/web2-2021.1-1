<h1>Editar Venda</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR VENDA</title>
</head>
<body>
    <form action="../update/{{$venda->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Id Cliente</label>
        <input type="text" name="cliente" id="cliente" value="{{$cliente->id}}">
        <p><label for="">Valor Total</label>
        <input type="text" name="valortotal" id="valortotal" value="{{$venda->valortotal}}">
        <p><label for="">Data</label>
        <input type="text" name="datavenda" id="datavenda" value="{{$venda->datavenda}}">
        
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>