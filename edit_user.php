<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$nusuario = $_POST['nususario'];
$nacimiento = $_POST['nacimiento'];

$sql="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', edad='$edad', nusuario='$nusuario', nacimiento='$nacimiento' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>