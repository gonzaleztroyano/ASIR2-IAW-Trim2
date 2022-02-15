<?php

if (!isset($_COOKIE['veces'])){
    setcookie("veces",0);
    $veces = -1;
    $veces_p1 = 0;
    $veces_p2 = 0;
    $veces_p3 = 0;
} else {
    $veces = ($_COOKIE['veces'] + 1);
    if ($_POST["Reiniciar"] == "Reiniciar"){
        $veces = -1;
        setcookie("veces",-1);
        header("Refresh:0");
    } else {
        setcookie("veces",$veces);
        };
    };
?>