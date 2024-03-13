<?php

include("conexion.php");

if (isset( $_POST['register'] )) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['instagram']) >= 1 &&
        strlen($_POST['phone']) >= 1
        ) {
            $name = trim($_POST['name']);
            $instagram = trim($_POST['instagram']);
            $phone = trim($_POST['phone']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre,  instagram,  telefono,  fecha)
                VALUES('$name', '$instagram','$phone','$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
            ?>
            <h3 class="succes" >Ya estas participando en el sorteo!</h3>
            <?php
        } else {
            ?>
            <h3 class="error">Ocurrio un error en tu registro</h3>
            <?php
        }
    } else {
        ?>
            <h3 class="error">Llena todos los campos</h3>
            <?php
    }
}
?>