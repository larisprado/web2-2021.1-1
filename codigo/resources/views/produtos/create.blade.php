<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos|Cadastro</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="store" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome">

        <p><label for="">ICMS:</label>
        <input type="text" name="icms" id="icms">

        <p><label for=""> IPI:</label>
        <input type="text" name="ipi" id="ipi">

        <p><label for="">Frete:</label>
        <input type="text" name="frete" id="frete">
        
        <p><label for="">Preço de Fábrica:</label><p>
        <input type="text" name="precofabrica" id="precofabrica">

        <p><label for="">Preço de Compra:</label>
        <input type="text" name="precocompra" id="precocompra">

        <p><label for=""> Preço de Venda:</label>
        <input type="text" name="precovenda" id="precovenda">

        <p><label for="">Lucro:</label>
        <input type="text" name="lucro" id="lucro">

        <p><label for="">Desconto:</label>
        <input type="text" name="desconto" id="desconto">

        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade">


        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>