<?php
session_start();
if ($_SESSION['pantalla1']=='check' && $_SESSION['pantalla2']=='check') {
    session_destroy();
}
header('Location: ../index.php');