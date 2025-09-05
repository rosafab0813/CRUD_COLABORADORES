<?php
include("conexion.php");


$id = $_GET['id'];


$sql = "DELETE FROM colaboradores WHERE id = '$id'";


mysqli_query($cn, $sql);


header("Location: colaborador.php");
exit();
?>
