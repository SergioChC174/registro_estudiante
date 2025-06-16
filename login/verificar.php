<?php
include "conexion.php";

$usuario = $_POST['usuario'];
$contraseña = hash('sha512', $_POST['contraseña']);

$sql= mysqli_query($conn, " SELECT * FROM administracion WHERE usuario ='$usuario' AND contraseña ='$contraseña'");

session_start();

if(mysqli_num_rows($sql)>0){
$_SESSION['codlog']= $usuario;
header("Location: /registro_estudiante/dashboard/index.html");
exit;

}else{
    echo '<script>
alert ("correo/contraseña invalidos");
window.location ="login.php";

</script>
';

}

?>