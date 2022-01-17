<?php
$contadornoticia=0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- Version Control: https://github.com/gonzaleztroyano/ASIR2-IAW-Trim2 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Introducción - PGT 2ASIR</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="cabecera">
        <h1>Esto es mi cabecera</h1>
        <?php
            echo $contadornoticia;
        ?>
    </div>
    <div id="contenido">
        <div class="noticia">
            <?php
                $contadornoticia++;
            ?>
            <img src="https://picsum.photos/100/150">
            <h2>Noticia número <?php
            echo $contadornoticia;
        ?></h2>
            <p>Bienvenido al Chiquito Ipsum, el generador de texto de relleno para tus diseños de antes de los dolores.
                Dale a "Fistrum" para que te salga ese pedaso de texto Chiquito en estado puro. Si te crees muy moderno dale a "Latin" que te lo pongo con cuarto y mitad de romanooo...
                Jarl!!</p>
            <p>Diodeno jarl torpedo torpedo quietooor al ataquerl tiene musho peligro ese hombree benemeritaar. Quietooor ese hombree sexuarl papaar papaar te va a hasé pupitaa apetecan hasta luego Lucas caballo blanco caballo negroorl papaar papaar. Condemor a gramenawer al ataquerl condemor amatomaa quietooor condemor torpedo ese que llega benemeritaar a gramenawer.</p>
        </div>
        <div class="noticia">
            <?php
                $contadornoticia++;
            ?>
            <img src="https://picsum.photos/100/150">
            <h2>Noticia número <?php
            echo $contadornoticia;
        ?></h2>
            <p>Bienvenido al Chiquito Ipsum, el generador de texto de relleno para tus diseños de antes de los dolores.
                Dale a "Fistrum" para que te salga ese pedaso de texto Chiquito en estado puro. Si te crees muy moderno dale a "Latin" que te lo pongo con cuarto y mitad de romanooo...
                Jarl!!</p>
            <p>Diodeno jarl torpedo torpedo quietooor al ataquerl tiene musho peligro ese hombree benemeritaar. Quietooor ese hombree sexuarl papaar papaar te va a hasé pupitaa apetecan hasta luego Lucas caballo blanco caballo negroorl papaar papaar. Condemor a gramenawer al ataquerl condemor amatomaa quietooor condemor torpedo ese que llega benemeritaar a gramenawer.</p>
        </div>    
    </div>
    <div id="footer">

    </div>
</body>

</html>