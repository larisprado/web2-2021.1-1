@extends('layouts.main')

@section('titulo', 'EDITAR CLIENTES')

@section('conteudo')

    <form action="../update/{{$fornecedor->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome Fornecedor</label>
        <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}">
        <p><label for="">Endereço</label>
        <input type="text" name="endereco" id="endereco" value="{{$fornecedor->endereco}}">
        <p><label for="">Débito</label>
        <input type="text" name="debito" id="debito" value="{{$fornecedor->debito}}">
        
        <p><input type="submit" value="Salvar">    
    </form>
    @endsection('conteudo')