<?php
include("./conexion.php");
session_start();
//inicio
if (isset($_POST["btn_inicio"])) {
    echo "hola muindo";
    /*
    if (empty($_POST["txt_correo_inicio_sesion"])and empty($_POST["txt_contrasena_inicio_sesion"])){
        echo "Faltan campos por llenar";
    }else{
        $usuario = $_POST["txt_correo_inicio_sesion"];
        $contrasena = $_POST["txt_contrasena_inicio_sesion"];
        $sql = "select*from usuarios where correo_usuario  ='$usuario' and contrasena_usuario = '$contrasena'";
        $res = $conn->query($sql);
        if($res->num_rows > 0){
            $row = $res->fetch_array();
            $_SESSION = $row;
            header("Location: ../prin.html");
            exit;
        }else{
            echo"No existe tal dato";
        }
        
    }
*/
}
//registro

if (isset($_POST["btn_registro_usuario"])){
$nombre = $_POST["txt_nombre_registro"];
$apellido = $_POST["txt_apellido_registro"];
$correo = $_POST["txt_correo_registro"];
$fecha = $_POST["txt_fecha_registro"];
$contrasena = $_POST["txt_contrasena_registro"];
if($nombre != null and $apellido != null and $correo != null and $contrasena != null and $fecha != null ){
    $sqlgrabar = "INSERT INTO usuarios(nombre_usuario, apellido_usuario, correo_usuario, contrasena_usuario, fecha_usuario)
    values ('$nombre', '$apellido', '$correo', '$contrasena', '$fecha')";
if (mysqli_query($conn, $sqlgrabar)) {
header("Location: ../prin.html");
exit;
} else {
$ms_error  = mysqli_connect_error();
echo "<script> alert('No hay conexion: $ms_error');  </script>";
}
}
echo"su nombre es: {$nombre}";

}