<?php
//Datos del servidor de base de datos
$host = '127.0.0.1';
$user = 'root';
$pass = '12345678';
$db = 'crudnueva_app';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
} else {
    echo "Conexion exitosa";
}
?>