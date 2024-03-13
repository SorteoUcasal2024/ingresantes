<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="post" >
    <img src="https://www.ucasal.edu.ar/wp-content/uploads/2022/07/logo-ucasal.png" alt="Imagen de bienvenida">
        <p>¡Ganate una Libreta Ucasal!</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre" >
            <img class="input-icon" src="images/name.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="instagram" name="instagram" placeholder="Instagram" >
            <img class="input-icon" src="images/email.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono" >
            <img class="input-icon" src="images/phone.svg" alt="">
        </div>
        <input class="btn" type="submit" name="register" value="Enviar">
    </form>

    <?php
        include("registrar.php");
    ?>
    
</body>
</html>

