<?php
session_start();

print_r($_POST);

if (isset($_POST['color'])) {
    $_SESSION['color'] = $_POST['color'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
</head>
<body style="background-color: <?=$_SESSION['color']?>;">
    <h1>Configura el color de la página</h1>    

    <form action="config.php" method="post">
    <input type="color" name="color" id="color" required>
    <input type="submit" name="enviar" value="Enviar" >
    </form>
    <a href="../page1.php">Página 1</a>
    <a href="../page2.php">Página 2</a>
    <a href="../config.php">Configuración</a>
</body>
</html>