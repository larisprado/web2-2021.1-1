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

<body>
    <div id="container" >
        <div class="title" >

            <a style="font-size: 280%; color: cornsilk;" class="fa fa-sitemap" href="{{route('teste')}}"> Socape</a>
            <!-- <a class="fa fa-users" href="/projeto/public/"> Início</a> -->
            <a style="color: cornsilk;" class="fa fa-shopping-cart nav-link" href="{{route('venda.index')}}"> Vendas</a>
            <a style="color: cornsilk;" class="fa fa-area-chart nav-link " href="{{route('fornecedor.index')}}"> Entradas</a>
            <a style="color: cornsilk;" class="fa fa-area-chart nav-link dropdown-toggle" href="{{route('entrada.index')}}" role="button" data-bs-toggle="dropdown"> Consultas</a>

            <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><a href="{{route('clientes.index')}}">CLIENTE</a></li>
                <li><a href="{{route('fornecedor.index')}}">FORNECEDOR</a></li>
                <li><a href="{{route('produto.index')}}">PRODUTO</a></li>
                <li><a href="{{route('carro.index')}}">CARRO</a></li>
                <li><a href="{{route('fornecedor.index')}}">LOCALIZAÇÃO</a></li>
                <li><a href="{{route('fornecedor.index')}}">VÁLVULA</a></li>
                <li><a href="{{route('fornecedor.index')}}">CATEGORIA</a></li>
                <li><a href="{{route('fornecedor.index')}}">MOTOR</a></li>
                <li><a href="{{route('fornecedor.index')}}">FABRICAÇÃO</a></li>
                <li><a href="{{route('fornecedor.index')}}">MARCA</a></li>
            </ul>
            
            <!-- <h4 style="font-size: 200%;" ><i class="fa fa-sitemap" ></i> Socape</h4>
                        <a class="fa fa-users" href="{{route('clientes.index')}}"> Clientes</a>
                        <a class="fa fa-shopping-cart" href="{{route('produto.index')}}"> Produtos</a>
                        <a class="fa fa-user-plus" href="{{route('fornecedor.index')}}"> Fornecedores</a>
                        <a class="fa fa-area-chart" href="{{route('entrada.index')}}"> Entradas</a>
                        <a class="fa fa-shopping-cart" href="{{route('venda.index')}}"> Vendas</a> -->


            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="font-size: 80%; color: cornsilk;" href="#" role="button" data-bs-toggle="dropdown"><i class="fa fa-user-o" style="color: cornsilk;"></i> Larissa Prado</a>
                    <ul class="dropdown-menu dropdown-menu-lg-end" style="margin: 0%; color:slategrey; font-size:40%">
                        <li>
                            <h6 class="dropdown-header">Olá, Larissa Prado!</h6>
                        </li>
                        <!-- <li>
                        <hr class="dropdown-divider">
                    </li> -->
                        <li><a class="dropdown-item" href="">PERFIL</a></li>
                        <li><a class="dropdown-item" href="">SAIR</a></li>
                    </ul>
                </li>
            </ul>
            </ul>
        </div>
        <div id="conteudo">
            @yield('conteudo')
        </div>
        <div id="footer">
            copyright @WEBII Larissa-Prado
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>