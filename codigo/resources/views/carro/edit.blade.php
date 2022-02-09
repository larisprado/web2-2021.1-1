@extends('layouts.main')

@section('titulo', 'EDITAR CARROS')

@section('conteudo')

<div id="form">
    <h3> Editar Carro </h3>
    <form action="{{route('carro.update', ['id' => $carro->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome do Carro</label>
        <input type="text" name="modelo" id="modelo" value="{{$carro->modelo}}">
        </br>

        <p><input type="submit" value="Salvar">
    </form>
</div>

@endsection('conteudo')