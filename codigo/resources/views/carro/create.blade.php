@extends('layouts.main')

@section('titulo', 'CADASTRO DE CARROS')

@section('conteudo')

<div id="form">
  <!-- 
  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li> {{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif -->

  <h3> ADICIONAR NOVO CARRO: </h3>
  <br>
  <form method="post" action="{{route('carro.store')}}">
    @csrf

      <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" class=" @error('modelo') is-invalid  @enderror" id="modelo" name="modelo" autocomplete="off" />
        @error('modelo')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

    <input type="submit" value="Cadastrar" />
  </form>
</div>

@endsection('conteudo')