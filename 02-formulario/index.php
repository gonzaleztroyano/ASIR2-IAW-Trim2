<?php

$bienvenido=true;

if(isset($_POST["enviar"])){
    /*echo "<p>Hola de nuevo, " . $_POST["nombre"] . " :) </p></br>";*/
    $bienvenido=false;
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $edad=$_POST["apellidos"];
}

/*
echo "</br>GET: </br>";
print_r($_GET);
echo "</br>    POST: </br>";
print_r($_POST);
echo "</br>    COOKIES: </br>";
print_r($_COOKIE);
echo "</br>    SERVER: </br>";
#print_r($_SERVER);

echo "";

print($_POST["nombre"]);  
print($_POST["apellidos"]);  
*/
print($_POST["edad"]);     
print_r($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Version Control: https://github.com/gonzaleztroyano/ASIR2-IAW-Trim2 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div id="header-message">
    
    <?php if($bienvenido) { ?>
        <h1>¡Bienvenido/a!</h1>
    <?php } ?>

    </div>
    <div>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input name="nombre" id="nombre" type="text" tabindex="1" value="<?php echo $nombre; ?>" />
                <label for="apellidos">Apellidos:</label>
                <input name="apellidos" id="apellidos" type="text" tabindex="2" value="<?php echo $apellidos; ?>"/>
            </fieldset>

            <fieldset>
                <legend>Edad</legend>
                <label><input type="radio" tabindex="20" name="edad" value="20-39" 

                    <?php
                        if($_POST["edad"] =="20-39") {
                            echo "checked";
                        }
                    ?>

                /> 20-39</label>
                <label><input type="radio" tabindex="21" name="edad" value="40-59" 
        
                <?php
                        if($_POST["edad"] == "40-59") {
                            echo "checked";
                        }
                    ?>
                
                /> 40-59</label>
                <label><input type="radio" tabindex="22" name="edad" value="60-79" 
            
                <?php
                        if($_POST["edad"] = "60-79") {
                            echo "checked";
                        }
                    ?>
                /> 60-79</label>
            </fieldset>
            <br>
            <input type="submit" name="enviar" value="Enviar" >
        </form>
    </div>
</body>
</html>