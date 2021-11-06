<h1>Produtos Cadastrados: </h1>
@foreach ($produtos as $produto)

<ul>
    
    <li>Nome: {{ $produto->nome }};</li>
    <li>ICMS: {{ $produto->icms }}; <li>
    <li>IPI: {{ $produto->ipi }};</li>
    <li>Frete: {{ $produto->frete }};</li>
    <li>Preço de Fábrica: {{ $produto->precofabrica }};</li>
    <li>Preço de Compra: {{ $produto->precocompra }}<;</li>
    <li>Preço de Venda: {{ $produto->precovenda }};</li>
    <li>Lucro:{{ $produto->lucro }};</li>
    <li>Desconto: {{ $produto->desconto }}</li>
    <li>Quantidade: {{ $produto->quantidade }};</li>
    
    <a href="edit/{{$produto->id}}">Editar</a>
    <form action="../produtos/{{$produto->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach