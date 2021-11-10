@extends('layouts.main')

@section('titulo', 'CADASTRO DE VENDAS')

@section('conteudo')
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
    @endsection('conteudo')