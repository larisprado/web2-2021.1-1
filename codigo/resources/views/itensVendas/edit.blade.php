@extends('layouts.main')

@section('titulo', 'EDITAR ITENS VENDAS')

@section('conteudo')
    <form action="../update/{{$itensvenda->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">IdVenda:</label>
        <input type="text" name="idvenda" id="idvenda" value="{{$venda->id}}">
        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" value="{{$itensvenda->quantidade}}">
        
        
        <p><input type="submit" value="salvar">    
    </form>
    @endsection('conteudo')