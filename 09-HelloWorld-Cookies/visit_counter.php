<?php

if (!isset($_COOKIE['veces'])){
    setcookie("veces",1);
    $veces = 1;
} else {
    $veces = ($_COOKIE['veces'] + 1);
    if ($_POST["Reiniciar"] == "Reiniciar"){
        $veces = 0;
        header("Refresh:0");
    }
    setcookie("veces",$veces);
}
?>