<?php

    include 'conexion_be.php';
    
    $nombre = $_POST['nombre_usuario'];
    $correo = $_POST['correo__usuario'];
    $edad = $_POST['edad_usuario'];
    $contrasena = $_POST['contrasena__usuario'];


    $agregar_datos ="INSERT INTO usuarios(nombre_usuario, correo, edad, contrasena) 
                     VALUES('$nombre', '$correo', '$edad', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $agregar_datos);

    if($ejecutar){
        echo'si';
    }else{
        echo'no';
    }

?>