@extends('layouts.main')

@section('titulo', 'CONSULTA DE CLIENTES')

@section('conteudo')

<div id="form">
    @foreach ($entradas as $entrada)

    <ul>

        <li>Idfornecedor: {{$fornecedor->id}};</li>
        <li>Valor: {{$entrada->valortotal}};</li>
        <li>Data: {{$entrada->datacompra}};</li>
        <a href="edit/{{$entrada->id}}">Editar</a>
        <form action="../entrada/{{$entrada->id}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="deletar">
        </form>
    </ul>
    @endforeach
</div>
@endsection('conteudo')