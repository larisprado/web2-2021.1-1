@extends('layouts.main')

@section('titulo', 'CADASTRO DE CLIENTES')

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

  <h3> ADICIONAR NOVO CLIENTE: </h3>
  <br>
  <form method="post" action="{{route('clientes.store')}}">
    @csrf

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class=" @error('nome') is-invalid  @enderror" id="nome" name="nome" autocomplete="off" minlength="8" />
        @error('nome')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>

    <div class="form-group">
      <label for="endereco">Endereço</label>
      <input type="text" class="@error('endereco') is-invalid  @enderror" id="endereco" name="endereco" autocomplete="off" />
      @error('endereco')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    <div class="form-group">
      <label for="debito">Débito</label>
      <input type="text" class=" @error('debito') is-invalid  @enderror" id="debito" name="debito" autocomplete="off" />
      @error('debito')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    <input type="submit" value="Cadastrar" />
  </form>
</div>

@endsection('conteudo')