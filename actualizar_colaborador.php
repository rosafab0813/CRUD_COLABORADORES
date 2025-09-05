<?php
include("conexion.php"); 

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$puesto = $_POST['puesto'];
$edad = $_POST['edad'];
$fecha_ingreso = $_POST['fecha_ingreso'];

$sql = "UPDATE colaboradores 
        SET nombre = '$nombre', cargo = '$cargo', puesto = '$puesto', edad = '$edad', fecha_ingreso = '$fecha_ingreso' 
        WHERE id = '$id'";


mysqli_query($cn, $sql);

header("Location: colaborador.php");
exit();
?>
