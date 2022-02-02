<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de datos</title>
</head>
<body>
    <h1>Formulario para enviar datos</h1>
    <form action="./view/mostrar.php" method="post">
        <input type="text" value="" name="nombre" placeholder="Inserte nombre...">
        <input type="password" name="pwd" placeholder="Inserte contraseña...">
        <input type="submit" value="enviar">
    </form>

    <?php  //apuntes
    
    /*
    Método GET: Límite de 255 carácteres y se ve en la URL.
        (útil para no enviar variables)
    Método POST: Siempre se usa cuando se van a enviar variables
        (útil con formularios y demás)
    
    
    
    */

    ?>
</body>
</html>