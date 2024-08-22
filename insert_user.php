<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$nusuario = $_POST['nususario'];
$nacimiento = $_POST['nacimiento'];

$sql = "INSERT INTO usuarios VALUES('$id','$nombre','$apellido','$edad','$nususario','$nacimiento')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>