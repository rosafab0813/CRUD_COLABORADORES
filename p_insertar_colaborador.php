<?php
include("conexion.php"); 


$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$puesto = $_POST['puesto'];
$edad = $_POST['edad'];
$fecha_ingreso = $_POST['fecha_ingreso'];


$sql = "INSERT INTO colaboradores (nombre, cargo, puesto, edad, fecha_ingreso) 
        VALUES ('$nombre', '$cargo', '$puesto', '$edad', '$fecha_ingreso')";

if (mysqli_query($cn, $sql)) {
    header("Location: colaborador.php"); 
    exit();
} else {
    echo "Error al insertar el colaborador: " . mysqli_error($cn);
}
?>
