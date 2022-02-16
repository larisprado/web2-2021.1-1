<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- CSS local -->
  <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
  <script src="../js/script.js"></script>
</head>

<body>
  <div id="login-container">
    <h1>Login</h1>
    <form action="">
      <label for="usuario">Usuário</label>
      <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário" autocomplete="off">
      <label for="password">Senha</label>
      <input type="password" name="password" id="password" placeholder="Digite sua senha">
      <a href="#" id="forgot-pass">Esqueceu a senha?</a>
      <a href="{{route('teste')}}" class="btn btn-outline-primary " role="button">Entrar</a>
    </form>
    <div id="social-container">
      <p>Ou entre pelas suas redes sociais</p>
      <i class="fa fa-facebook-f"></i>
      <i class="fa fa-instagram"></i>
    </div>
    <div id="register-container">
      <p>Ainda não tem uma conta?</p>
      <a href="#">Registrar</a>
    </div>
  </div>
</body>

</html>