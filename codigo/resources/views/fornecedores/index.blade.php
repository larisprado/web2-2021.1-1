@extends('layouts.main')

@section('titulo', 'CONSULTA DE FORNECEDORES')

@section('conteudo')

<div id="form">
    <h2> FORNECEDORES: </h2>
    <table class="table">
        <thead>
            <tr>
                <th style="color: blue;"> NOME: </th>
                <th style="color: blue;"> ENDEREÇO: </th>
                <th style="color: blue;"> DÉBITO: </th>
            </tr>
            <tr>
                @foreach ($fornecedor as $fornecedor)

                <th> {{ $fornecedor->nome }} </th>
                <th> {{ $fornecedor->endereco }} </th>
                <th> {{ $fornecedor->debito }} </th>
                <th> <a href="fornecedor/edit/{{$fornecedor->id}}">Editar</a> </th>
                <th>
                    <form action="fornecedor/{{$fornecedor->id}}" method="POST">
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