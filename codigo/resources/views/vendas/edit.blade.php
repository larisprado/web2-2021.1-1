@extends('layouts.main')

@section('titulo', 'EDITAR VENDAS')

@section('conteudo')
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
    @endsection('conteudo')