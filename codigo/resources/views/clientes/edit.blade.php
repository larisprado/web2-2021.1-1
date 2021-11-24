@extends('layouts.main')

@section('titulo', 'EDITAR CLIENTES')

@section('conteudo')

<div id="form">
    <h3> Editar Cliente </h3>
    <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome do Cliente</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
        </br>

        <p><label for="">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="{{$cliente->endereco}}">
            </br>
            
        <p><label for="">Débito</label>
            <input type="text" name="debito" id="debito" value="{{$cliente->debito}}">

        <p><input type="submit" value="Salvar">
    </form>
</div>

@endsection('conteudo')