@extends('layouts.layouts')     

@section('titulo', 'CONSULTA DE CARROS')

@section('conteudo')

<div id="form">
    <h3> CARROS: </h3>
</br>
<div id="container">
    <table class="table mb-5">
        <thead>
            <tr>
                <th style="color: blue;">#</th>
                <th style="color: blue;"> MODELO: </th>
            </tr>
            <tr>
                @foreach ($carros as $carro)

                <th scope="col">{{ $carro->id }}</th>
                <th> {{ $carro->modelo }} </th>
                <th> <a href="{{route('carros.edit', ['id' => $carro->id])}}"> Editar</a> </th>
                <th>
                    <form action="{{route('carros.delete', ['id' => $carro->id])}}" method="POST">
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
</div>
@endsection('conteudo')