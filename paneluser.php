<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<?php
session_start();

$varsession = $_SESSION['user'];

if(!$varsession){
    echo '<h1>No tiene autorización para ingresar al sistema</h1>';
    echo '<a href="index.php">Llévame al Login</a>';
    //después de die ya no se ejecuta el código
    die();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido al Panel de Usuario</h1>
    <span>Bienvenido: </span><strong><?php echo $_SESSION['user'] ?></strong>
    <p><a href="salir.php">Salir</a></p>
</body>
</html>