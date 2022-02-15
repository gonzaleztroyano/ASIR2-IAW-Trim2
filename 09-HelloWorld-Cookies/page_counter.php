<?php
//print($_SERVER['REQUEST_URI']);
//print_r($_COOKIE);

if (strpos($_SERVER['REQUEST_URI'],'page1') !== false) {
    $veces_p1 = $_COOKIE['veces_p1'] + 1; 
    if ($_POST["Reiniciar"] == "Reiniciar"){
        setcookie("veces_p1",0);
        setcookie("veces_p2",0);
        setcookie("veces_p3",0);
        header("Refresh:0");
    } else {
        setcookie("veces_p1",$veces_p1);
    };
};
if (strpos($_SERVER['REQUEST_URI'],'page2') !== false) {
    $veces_p2 = $_COOKIE['veces_p2'] + 1; 
    if ($_POST["Reiniciar"] == "Reiniciar"){
        setcookie("veces_p1",0);
        setcookie("veces_p2",0);
        setcookie("veces_p3",0);
        header("Refresh:0");
    } else {
        setcookie("veces_p2",$veces_p2);
    };
};
if (strpos($_SERVER['REQUEST_URI'],'page3') !== false) {
    $veces_p3 = $_COOKIE['veces_p3'] + 1; 
    if ($_POST["Reiniciar"] == "Reiniciar"){
        setcookie("veces_p1",0);
        setcookie("veces_p2",0);
        setcookie("veces_p3",0);
        header("Refresh:0");
    } else {
        setcookie("veces_p3",$veces_p3);
    };
};
?>