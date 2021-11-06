@extends('layouts.main')

@section('titulo', 'CONSULTA DE CLIENTES')

@section('conteudo')

<div id="form">
    @foreach ($clientes as $cliente)
    <ul>
        <li>Nome : {{ $cliente->nome }}</li>
        <li>Endereço: {{ $cliente->endereco }}</li>
        <li>Débito: {{ $cliente->debito }}</li>
        <a href="{{route('clientes.edit', ['id' => $cliente->id])}}">Editar</a>

        <form action="{{route('clientes.delete', ['id' => $cliente->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar">
        </form>
    </ul>
    @endforeach
</div>
@endsection('conteudo')