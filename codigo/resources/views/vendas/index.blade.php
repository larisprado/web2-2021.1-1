<h1>Vendas Cadastradas: </h1>
@foreach ($vendas as $venda)

<ul>
    
    <li>IdCliente: {{$cliente->id}};</li>
    <li>Valor: {{$venda->valortotal}};</li>
    <li>Data: {{$venda->datavenda}};</li>
    <a href="edit/{{$venda->id}}">Editar</a>
    <form action="../venda/{{$venda->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach