<h1>ItensEntradas Cadastradas: </h1>
@foreach ($itensentradas as $itensentrada)

<ul>
    
    <li>Identrada: {{$entrada->id}};</li>
    <li>Quantidade: {{$itensentrada->quantidade}};</li>
    <a href="edit/{{$itensentrada->id}}">Editar</a>
    <form action="../itensentrada/{{$itensentrada->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach