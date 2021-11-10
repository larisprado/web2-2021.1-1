@extends('layouts.main')

@section('titulo', 'CONSULTA DE CLIENTES')

@section('conteudo')

<div id="form">
    <h2> CLIENTES: </h2>
    <table class="table">
        <thead>
            <tr>
                <th style="color: blue;"> NOME: </th>
                <th style="color: blue;"> ENDEREÇO: </th>
                <th style="color: blue;"> DÉBITO: </th>
            </tr>
            <tr>
                @foreach ($clientes as $cliente)

                <th> {{ $cliente->nome }} </th>
                <th> {{ $cliente->endereco }} </th>
                <th> {{ $cliente->debito }} </th>
                <th> <a href="{{route('clientes.edit', ['id' => $cliente->id])}}">Editar</a> </th>
                <th>
                    <form action="{{route('clientes.delete', ['id' => $cliente->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Deletar">
                    </form>
                </th>
            </tr>

            @endforeach
        </thead>
    </table>
</div>
@endsection('conteudo')