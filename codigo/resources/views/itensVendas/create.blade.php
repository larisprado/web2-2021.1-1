@extends('layouts.main')

@section('titulo', 'CADASTRO DE CLIENTES')

@section('conteudo')
    <h1>Cadastrar ItensVenda</h1>
    <form action="store" method="POST">
        @csrf
        <label for="">Idvenda:</label>
        <input type="text" name="idvenda" id="idvenda">

        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade">
        
        <p><input type="submit" value="cadastrar">    
    </form>
    @endsection('conteudo')
