<h1>Página de clientes</h1>

@foreach ($clientes as $cliente)
<ul>
    <li>Nome : {{ $cliente->nome }}</li>
    <li>Endereço: {{ $cliente->endereco }}</li>
    <li>Débito: {{ $cliente->debito }}</li>
</ul>
@endforeach