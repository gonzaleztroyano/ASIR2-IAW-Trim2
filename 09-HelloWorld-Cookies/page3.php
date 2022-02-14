<?php
include("./visit_counter.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
</head>
<body>
    <h1> Página 3: <em>Cookies</em></h1>
    </br>
    <h2>Has accedido a esta página <?=$_COOKIE['veces']?> veces </h2>
    <p>Puedes acceder al resto de páginas usando los siguientes enlaces</p>
    <ul>
        <li> <a href="./page1.php">Página 1</a>
        <li> <a href="./page2.php">Página 2</a>
        <li> <a href="./page3.php">Página 3</a>
    </ul>
</body>
</html>