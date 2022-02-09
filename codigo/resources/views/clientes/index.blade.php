@extends('layouts.layouts')     

@section('titulo', 'CONSULTA DE CLIENTES')

@section('conteudo')

<div id="form">
    <h3> CLIENTES: </h3>
</br>
<div id="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th style="color: blue;">#</th>
                <th style="color: blue;"> NOME: </th>
                <th style="color: blue;"> ENDEREÇO: </th>
                <th style="color: blue;"> DÉBITO: </th>
            </tr>
            <tr>
                @foreach ($clientes as $cliente)

                <th scope="col">{{ $cliente->id }}</th>
                <th> {{ $cliente->nome }} </th>
                <th> {{ $cliente->endereco }} </th>
                <th> {{ $cliente->debito }} </th>
                <th> <a href="{{route('clientes.edit', ['id' => $cliente->id])}}" class="btn btn-outline-primary btn-sm"> Editar</a> </th>
                <th>
                    <form action="{{route('clientes.delete', ['id' => $cliente->id])}}" method="POST"> 
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-outline-danger btn-sm">Deletar</button>
                    </form>
                </th>
            </tr>

            @endforeach
        </thead>
    </table>
</div>
</div>
@endsection