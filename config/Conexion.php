<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "CRUD";

$conexion = new mysqli($host,$user,$pass,$db);

if (!$conexion) {
    echo 'Conexion fallida';
}
?>

<link
 href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

