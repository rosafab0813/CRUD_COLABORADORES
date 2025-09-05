<?php
include("conexion.php"); 

$sql = "SELECT * FROM colaboradores";
$result = mysqli_query($cn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Colaboradores</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="table-container">
        <h2>Listado de Colaboradores</h2>
        <a href="insertar_colaborador.php" class="insertar-colaborador-btn">
            <img src="img/agregarcolaborador.gif" alt="Insertar Colaborador" >Insertar Colaborador
        </a>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Puesto</th>
                    <th>Edad</th>
                    <th>Fecha de Ingreso</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['cargo']; ?></td>
                    <td><?php echo $row['puesto']; ?></td>
                    <td><?php echo $row['edad']; ?></td>
                    <td><?php echo $row['fecha_ingreso']; ?></td>
                    <td>
                        <a href="editar_colaborador.php?id=<?php echo $row['id']; ?>" class="btn-edit">
                            <img src="img/editar.jpg" alt="Editar"> 
                        </a>
                        <a href="eliminar_colaborador.php?id=<?php echo $row['id']; ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este colaborador?');" class="btn-delete">
                            <img src="img/eliminar.jpg" alt="Eliminar">
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

