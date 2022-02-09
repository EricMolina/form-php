<?php
session_start();
if (isset($_POST['pokemon1'])) {
    if (strtolower($_POST['pokemon1']) == "pikachu") {
        $_SESSION['pantalla1']='check';
        header('Location: ../view/pantalla1.php?pokemon1=pikachu');
    } else {
        header('Location: ../index.php?msg=mas%20conocido');
    }
}
else if (isset($_POST['pokemon2'])) {
    if (strtolower($_POST['pokemon2']) == "victini") {
        $_SESSION['pantalla2']='check';
        header('Location: ../view/pantalla2.php?pokemon=victini');
    } else {
        header('Location: ../view/pantalla1.php?msg=Es%20un%20pokémon%20legendario');
    }
}
else {
    session_destroy();
    header('Location: ../index.php');
}


