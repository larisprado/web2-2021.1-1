<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS local -->
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
    <script src="../js/script.js"></script>

    <title>@yield('titulo')</title>

</head>

<body >
  <div id="layout">
    <div id="container">
            <div class="title">

                <a style="font-size: 200%;" href="{{route('teste')}}"><i class="fa fa-sitemap" ></i> Socape</a>
                <a class="fa fa-users" href="{{route('clientes.index')}}"> Clientes</a>
                <a class="fa fa-shopping-cart" href="{{route('produto.index')}}"> Produtos</a>
                <a class="fa fa-user-plus" href="{{route('fornecedor.index')}}"> Fornecedores</a>
                <a class="fa fa-area-chart" href="{{route('entrada.index')}}"> Entradas</a>
                <a class="fa fa-shopping-cart" href="{{route('venda.index')}}"> Vendas</a>
            </div>
        <div id="conteudo">
            @yield('conteudo')
        </div>
        <div id="footer">
            copyright @WEBII Larissa-Prado
        </div>
    </div>
  </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>