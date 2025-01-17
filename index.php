<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Signin Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin">
  <img class="mb-4" src="bootstrap-solid.svg" width = "72" height = "72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="" class="sr-only">Usuario</label>
  <input type="password" id="inputEmail" class="form-control" name = "usuario" placeholder="Usuario" required autofocus>
  <label for="" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name = "password" placeholder="Contraseña" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Recuérdame
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</form>
</body>
</html>


<?php
require_once "validar.php";

$usuario    =   $_GET['usuario'];
$password   =   $_GET['password'];

if($usuario == "admin" && $password == "admin"){
    Validar::admin();
} else if($usuario == "user" && $password == "user"){
    Validar::user();
}
?>