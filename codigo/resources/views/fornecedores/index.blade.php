@extends('layouts.main')

@section('titulo', 'CONSULTA DE CLIENTES')

@section('conteudo')

<div id="form">
    <table class="table">
        <thead>
            <tr>
                <th> Nome </th>
                <th> Endereço: </th>
                <th> Débito: </th>
            </tr>
            <tr>
                @foreach ($fornecedor as $fornecedor)

                <th> {{ $fornecedor->nome }} </th>
                <th> {{ $fornecedor->endereco }} </th>
                <th> {{ $fornecedor->debito }} </th>
            

            <a href="fornecedor/edit/{{$fornecedor->id}}">Editar</a>

            <form action="fornecedor/{{$fornecedor->id}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Deletar">
            </form>
            </tr>
       
    @endforeach
    </thead>
    </table>    
</div>
@endsection('conteudo')