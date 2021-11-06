<h1>ItensVendas Cadastradas: </h1>
@foreach ($itensvendas as $itensvenda)

<ul>
    
    <li>IdVenda: {{$venda->id}};</li>
    <li>Quantidade: {{$itensvenda->quantidade}};</li>
    <a href="edit/{{$itensvenda->id}}">Editar</a>
    <form action="../itensvenda/{{$itensvenda->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach