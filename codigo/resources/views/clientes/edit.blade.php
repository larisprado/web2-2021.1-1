@extends('layouts.main')

@section('titulo', 'EDITAR CLIENTES')

@section('conteudo')

<div id="form-edit">
    <h3> Editar Cliente </h3>
    <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome do Cliente</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}" autocomplete="off">
        
        <p><label for="">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="{{$cliente->endereco}}" autocomplete="off">
            
        <p><label for="">Débito</label>
            <input type="text" name="debito" id="debito" value="{{$cliente->debito}}" autocomplete="off">

        <p><input type="button" class="btn btn-outline-success" value="Salvar">
    </form>
</div>

@endsection('conteudo')