<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS local -->
    <link rel="stylesheet" href="./css/style.css">
    <script src="../js/script.js"></script>

    <title>@yield('titulo')</title>
</head>

<body>
    <div id="container">
        <div id="header">
            <h2>SISTEMA DE VENDAS</h2>
        </div>
        <div id="nav">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><a href="">Clientes</a></th>
                        <th><a href="">Produtos</a></th>
                        <th><a href="">Fornecederos</a></th>
                        <th><a href="">Entradas</a></th>
                        <th><a href="">Vendas</a></th>
                    </tr>
                </thead>
            </table>
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