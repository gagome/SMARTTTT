
<?php
include 'conexion_be.php';

$nombre_usuarios = $_POST['nombre_usuario'];
$correo_usuarios = $_POST['correo__usuario'];
$edad_usuarios = $_POST['edad_usuario'];
$contrasena_usuarios = $_POST['contrasena__usuario'];
$verificador_usuarios = $_POST['verificar-contraseña__usuario'];


if(str_word_count($nombre_usuarios) < 2 || preg_match('/\d/', $nombre_usuarios)){
    echo ".";
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        Swal.fire({
            icon: "error",
            title: "<span style=\'font-family: monospace;\'>Oops...</span>",
            text: "Parece que el nombre que escribiste no es válido"
            }).then((result) => {
                if (result.isConfirmed || result.isDismissed) {
                    window.location = "../inicio.php";
                }
            });
    </script>
    ';
}else if($edad_usuarios < 4 || $edad_usuarios > 100){
    echo ".";
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        Swal.fire({
            icon: "error",
            title: "<span style=\'font-family: monospace;\'>Oops...</span>",
            text: "Parece que la edad que escribiste no es valida"
            }).then((result) => {
                if (result.isConfirmed || result.isDismissed) {
                    window.location = "../inicio.php";
                }
            });
    </script>';
}else if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
    echo ".";
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        Swal.fire({
            icon: "error",
            title: "<span style=\'font-family: monospace;\'>Oops...</span>",
            text: "Parece que el correo que escribiste no es valido"
            }).then((result) => {
                if (result.isConfirmed || result.isDismissed) {
                    window.location = "../inicio.php";
                }
            });
    </script>';
};
//$agregar_datos ="INSERT INTO usuarios(nombre_usuario, correo, edad, contrasena) 
//VALUES('$nombre_usuarios', '$correo_usuarios', '$edad_usuarios', '$contrasena_usuarios')";
//$ejecutar = mysqli_query($conexion, $agregar_datos);
//echo'hola';
//if($ejecutar){
//    echo'si';
//    
//}else{
//    echo'no';
//}


?>
