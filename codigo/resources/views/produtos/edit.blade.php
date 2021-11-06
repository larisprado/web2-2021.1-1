<h1>Editar Produto</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <form action="../update/{{$produto->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{$produto->nome}}">

        <p><label for="">ICMS:</label>
        <input type="text" name="icms" id="icms" value="{{$produto->icms}}">

        <p><label for=""> IPI:</label>
        <input type="text" name="ipi" id="ipi" value="{{$produto->ipi}}">

        <p><label for="">Frete:</label>
        <input type="text" name="frete" id="frete" value="{{$produto->frete}}">
        
        <p><label for="">Preço de Fábrica:</label><p>
        <input type="text" name="precofabrica" id="precofabrica" value="{{$produto->precofabrica}}">

        <p><label for="">Preço de Compra:</label>
        <input type="text" name="precocompra" id="precocompra" value="{{$produto->precompra}}">

        <p><label for=""> Preço de Venda:</label>
        <input type="text" name="precovenda" id="precovenda" value="{{$produto->precovenda}}">

        <p><label for="">Lucro:</label>
        <input type="text" name="lucro" id="lucro" value="{{$produto->lucro}}">

        <p><label for="">Desconto:</label>
        <input type="text" name="desconto" id="desconto" value="{{$produto->desconto}}">

        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
        
        <p><input type="submit" value="salvar">    
    </form>
</body>
</html>