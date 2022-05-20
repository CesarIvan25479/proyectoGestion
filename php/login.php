<?php
include "./conexion.php";
$usuario = $_POST["email"];
$pass = $_POST["pass"];
$data = array();
$consulta = "SELECT *FROM usuarios WHERE (matricula = '$usuario' or correo = '$usuario') and contrasena = '$pass'";
$resultado = mysqli_query($conexion, $consulta);
$datosUsuario = mysqli_fetch_array($resultado);
$registro = mysqli_num_rows($resultado);
if($registro == 1 ){
    session_start();
    $_SESSION['usuario'] = $datosUsuario["correo"];
    $data["estado"] = "iniciar";
}else{
    $data["estado"] = "sinregistro";
}
echo json_encode($data);