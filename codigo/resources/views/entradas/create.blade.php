@extends('layouts.main')

@section('titulo', 'CADASTRO DE CLIENTES')

@section('conteudo')

    <form action="store" method="POST">
        @csrf
        <label for="">Idfornecedor:</label>
        <input type="text" name="idfornecedor" id="idfornecedor">

        <p><label for="">Valor total:</label>
        <input type="text" name="valortotal" id="valortotal">

        <p><label for="">Data:</label>
        <input type="text" name="datacompra" id="datacompra">
        
        <p><input type="submit" value="cadastrar">    
    </form>
</body>
</html>
