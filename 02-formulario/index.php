<?php

$edad20_39="";
$edad40_59="";
$edad60_79="";
$bienvenido="¡Bienvenido/a!";
$errores = false;
$error_nombre = false;
$error_apellidos = false;
$error_edad = false;

if(isset($_POST["enviar"])){
    /*echo "<p>Hola de nuevo, " . $_POST["nombre"] . " :) </p></br>";*/
    $bienvenido="";
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $edad=$_POST["apellidos"];
    /*
    $edad20_39=($_POST["edad"] == "20_39")?"checked":"";
    $edad40_59=($_POST["edad"] == "40_59")?"checked":"";
    $edad60_79=($_POST["edad"] == "60_79")?"checked":"";
    */
    ${"edad".$_POST["edad"]}='checked';
    $nombre = (isset($_POST["nombre"]))?$_POST["nombre"]:'';
    if(strlen($nombre)<3){
        $error_nombre = true;
        $errores = true;
    }

    $apellidos = (isset($_POST["apellidos"]))?$_POST["apellidos"]:'';
    if(strlen($apellidos)<3){
        $error_apellidos = true;
        $errores = true;
    }

    if(!isset($_POST["edad"])){
        $error_edad = true;
    }
}

/*
    if(isset($_POST["edad"])){
        if($_POST["edad"] =="20-39") {
            $edad20="checked";
        }
        if($_POST["edad"] =="40-59") {
            $edad40="checked";
        }
        if($_POST["edad"] =="60-79") {
            $edad60="checked";
        }
    }
}
*/

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

    print($_POST["edad"]);     
    print_r($_POST);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Version Control: https://github.com/gonzaleztroyano/ASIR2-IAW-Trim2 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="header-message">
        <h1><?=$bienvenido?></h1>
    </div>
    <div>  

        <?php if($errores) { ?>
            <div class="error">
                Los datos introducidos tienen errores.
            </div>
        <?php } ?>

        <?php if($error_nombre) { ?>
            <div class="error-details">
                Detalles del error: el campo nombre está vacío o es inferior a 3 caracteres. 
        </div>
        <?php } ?>

        <?php if($error_apellidos) { ?>
            <div class="error-details">
                Detalles del error: el campo apellidos está vacío o es inferior a 3 caracteres. 
        </div>
        <?php } ?>

        <?php if($error_edad) { ?>
            <div class="error-details">
                Detalles del error: es necesario seleccionar una edad. 
        </div>
        <?php } ?>

        <form action="index.php" method="post" id="formulario">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre" <?=($error_nombre)?'class="error"':'';?> >Nombre:</label>
                <input <?=($error_nombre)?'class="background-error"':'';?> name="nombre" id="nombre" type="text" tabindex="1" value="<?=$nombre?>" />
                <label  <?=($error_apellidos)?'class="error"':'';?> for="apellidos">Apellidos:</label>
                <input <?=($error_apellidos)?'class="background-error"':'';?> name="apellidos" id="apellidos" type="text" tabindex="2" value="<?=$apellidos?>"/>
            </fieldset>
            <fieldset <?=($error_edad)?'class="background-error"':'';?>> 
                <legend>Edad</legend>
                <label><input type="radio" tabindex="20" name="edad" value="20_39" <?=$edad20_39?> /> 20-39</label>
                <label><input type="radio" tabindex="21" name="edad" value="40_59" <?=$edad40_59?> /> 40-59</label>
                <label><input type="radio" tabindex="22" name="edad" value="60_79" <?=$edad60_79?>/> 60-79</label>
            </fieldset>
            <br>
            <input type="submit" name="enviar" value="Enviar" >
        </form>
    </div>
</body>
</html>