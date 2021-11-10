@extends('layouts.main')

@section('titulo', 'EDITAR ITENS ENTRADA')

@section('conteudo')
    <form action="../update/{{$itensentrada->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Identrada</label>
        <input type="text" name="entrada" id="entrada" value="{{$entrada->id}}">
        <p><label for="">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" value="{{$itensentrada->quantidade}}">
        
        <p><input type="submit" value="salvar">    
    </form>
    @endsection('conteudo')
