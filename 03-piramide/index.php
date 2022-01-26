<?php

if(isset($_POST["enviar"])){
    $generar = true;
    $filas = $_POST["numero"];
    $cosa = $_POST["cosa"];
}
if(isset($_GET["numero"])){
    $generar = true;
    $recargar = true;
    $filas = $_GET["numero"];
    $cosa = $_GET["cosa"];
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        if($generar == true) {
            echo '<meta http-equiv="refresh" content="2"; url="http://localhost:3000/03-piramide/index.php?cosa=' . $cosa .'&numero=' . $filas . '">';
        }

        ?>
        <meta charset="UTF-8">
        <!-- Version Control: https://github.com/gonzaleztroyano/ASIR2-IAW-Trim2 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pirámides</title>
    </head>
    <body>
        <h1>Generador de pirámides</h1>

        <div id="formularo">
            <form action="index.php" method="post">
            <label for="cosa">Caracter: &nbsp;&nbsp;&nbsp;</label>
            <input name="cosa" id="cosa" type="text" tabindex="1" />  
            <label for="numero">Número: &nbsp;&nbsp;&nbsp;</label>
            <input name="numero" id="numero" type="numero" tabindex="2" />    
            <input type="submit" name="enviar" value="Enviar" >
        </form>
        <br><hr><br>
        </div>
        <div>
        <?php
            for ($fila = 0; $fila < $filas; $fila++) {
                for ($columna = 0; $columna < $fila; $columna++){
                echo "<span style=' color: #". rand(0,999999). ";'>" . $cosa. " </span>";
            }
            echo "</br>";
            }
        ?>
        </div>
    </body>
</html>