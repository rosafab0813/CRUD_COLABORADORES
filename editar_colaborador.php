<?php
include("conexion.php"); 
$id = $_GET['id'];

$sql = "SELECT * FROM colaboradores WHERE id = '$id'";
$result = mysqli_query($cn, $sql);
$colaborador = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Colaborador</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="center-container">
        <form action="actualizar_colaborador.php" method="post">
            <h2>Editar Colaborador</h2>

            <input type="hidden" name="id" value="<?php echo $colaborador['id']; ?>">

            <div class="caja">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $colaborador['nombre']; ?>" required>
            </div>

            <div class="caja">
                <label for="cargo">Cargo:</label>
                <input type="text" name="cargo" id="cargo" value="<?php echo $colaborador['cargo']; ?>" required>
            </div>

            <div class="caja">
                <label for="puesto">Puesto:</label>
                <select name="puesto" id="puesto" required>
                    <option value="Diseño Web" <?php if ($colaborador['puesto'] == 'Diseño Web') echo 'selected'; ?>>Diseño Web</option>
                    <option value="Diseño Gráfico" <?php if ($colaborador['puesto'] == 'Diseño Gráfico') echo 'selected'; ?>>Diseño Gráfico</option>
                    <option value="Community Manager" <?php if ($colaborador['puesto'] == 'Community Manager') echo 'selected'; ?>>Community Manager</option>
                </select>
            </div>

            <div class="caja">
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" value="<?php echo $colaborador['edad']; ?>" required>
            </div>

            <div class="caja">
                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" name="fecha_ingreso" id="fecha_ingreso" value="<?php echo $colaborador['fecha_ingreso']; ?>" required>
            </div>

            <input type="submit" value="Actualizar Colaborador">
        </form>
    </div>
</body>
</html>

