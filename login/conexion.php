<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "plataforma";

$conn = new mysqli($hostname, $user, $password, $database);

if($conn -> connect_error){
    die("Error en la coneccion: ") .$conn->connect_error;
}
?>