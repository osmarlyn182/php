<?php
require_once 'funciones.php';
if($_POST){
    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];

        insertar($nombre, $descripcion, $precio);
    }
    
}
header('location:index.php');