<?php

if(isset($_POST["enviar"])){
    $generar = true;
    $filas = $_POST["numero"];
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
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
            <label for="numero">Número: &nbsp;&nbsp;&nbsp;</label>
            <input name="numero" id="numero" type="numero" tabindex="1" />    
            <input type="submit" name="enviar" value="Enviar" >
        </form>
        <br><hr><br>
        </div>
        
        <?php
            $astk = "*";
            for ($i = 0; $i < $filas; $i++) {
                echo $astk . "<br>";
                $astk = $astk . "*";
                
            }
        ?>

    </body>
</html>