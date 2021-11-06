@extends('layouts.main')

@section('titulo', 'EDITAR ENTRADAS')

@section('conteudo')
    <form action="../update/{{$entrada->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Id Fornecedor</label>
        <input type="text" name="fornecedor" id="fornecedor" value="{{$fornecedor->id}}">
        <p><label for="">Valor Total</label>
        <input type="text" name="valortotal" id="valortotal" value="{{$entrada->valortotal}}">
        <p><label for="">Data</label>
        <input type="text" name="datacompra" id="datacompra" value="{{$entrada->datacompra}}">
        
        <p><input type="submit" value="salvar">    
    </form>
    @endsection('conteudo')