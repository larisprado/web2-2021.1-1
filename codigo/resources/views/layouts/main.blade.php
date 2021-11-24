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
    <div id="container">
        <!-- <div id="header">
            <h2>SISTEMA DE VENDAS</h2>
        </div> -->
        <!-- <div id="nav" style="text-align:center"> -->
            <!-- <div class="modal-header" style="background-color: lightseagreen;" ; text-align:center>
                <nav class="navbar navbar-expand-sm"> -->
                    <div class="title">
                        <!-- <table class="table mb-5" >
                        <thead>
                            <tr>
                                <th><h5> SISPRADO</h5></th>
                                <th><a href="clientes/">Clientes</a></th>
                                <th><a href="produtos/">Produtos</a></th>
                                <th><a href="fornecedor/">Fornecedores</a></th>
                                <th><a href="entradas/">Entradas</a></th>
                                <th><a href="vendas/">Vendas</a></th>
                            </tr>
                        </thead>
                    </table> -->

                        <h4 class="d-flex mb-2" style="color: white;" ><i class="fas fa-h4" aria-hidden="true"></i> SisPrado</h4>
                        <a href="{{route('clientes.index')}}">Clientes</a>
                        <a href="{{route('produto.index')}}">Produtos</a>
                        <a href="{{route('fornecedor.index')}}">Fornecedores</a>
                        <a href="{{route('entrada.index')}}">Entradas</a>
                        <a href="{{route('venda.index')}}">Vendas</a>
                    </div>
                <!-- </nav>
            </div> -->
        <!-- </div> -->
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