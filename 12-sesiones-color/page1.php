<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body style="background-color: <?=$_SESSION['color']?>;">
    <h1> Página 1</h1>
    <a href="./page1.php">Página 1</a>
    <a href="./page2.php">Página 2</a>
    <a href="./config.php">Configuración</a>
</body>
</html>