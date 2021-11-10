@extends('layouts.main')

@section('titulo', 'CADASTRO ITENS ENTRADA')

@section('conteudo')
    <h1>Cadastrar Itens Entrada</h1>
    <form action="store" method="POST">
        @csrf
        <label for="">Identrada:</label>
        <input type="text" name="identrada" id="identrada">

        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade">
        
        <p><input type="submit" value="cadastrar">    
    </form>
    @endsection('conteudo')