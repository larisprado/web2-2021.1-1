@extends('layouts.main')

@section('titulo', 'CADASTRO DE CLIENTES')

@section('conteudo')

    <form method="post" action="{{route('enderecostore')}}">
        @csrf
        <label for="logradouro">Logradouro</label>
        <input type="text" id="logradouro" name="logradouro" />
        
        <label for="bairro">Bairro</label>
        <input type="text" id="bairro" name="bairro" />

        <label for="cidade">Cidade</label>
        <input type="text" id="cidade" name="cidade" />

        <label for="uf">UF</label>
        <input type="text" id="uf" name="uf" />

        {{$cliente_id}}
        <input type="hidden" name="cliente_id" valu={{$cliente_id}}/>
        
        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html>