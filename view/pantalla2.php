<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>

<body>
    <h1>Mostrar datos del formulario</h1>
    <?php //Código de PHP
    session_start();
    if ($_SESSION['pantalla2']!='check') {
        header('Location: ../index.php');
    }


    if (isset($_GET['pokemon'])) {
        $nombre = $_GET['pokemon'];
        print "<p>".$nombre."</p>";
        //$pwd = $_POST['pwd'];
        //print "<p>".$pwd."</p>";
    }
    ?>
    <a href="../proc/res.proc.php">Volver a jugar</a>
</body>
</html>