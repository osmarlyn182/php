<?php
function conectar()
{
    $cn = mysqli_connect('localhost','root','','test','3306');
    return $cn;
}

function consultar()
{
    $cn = conectar();
    $query = "SELECT * FROM information";
    $result =  mysqli_query($cn, $query);
    print_r($result);
    mysqli_close($cn);
    return $result;
}
function insertar($nombre, $descripcion,$precio) 
{
    $query = "INSERT INTO  information( nombre, descripcion, precio) VALUES ('$nombre, '$descripcion','$precio')";
    $cn = conectar();
    $result = mysqli_query($cn, $query);
    mysqli_close($cn);

}

?>