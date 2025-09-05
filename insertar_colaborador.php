<?php
include("conexion.php"); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Colaborador</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="center-container">
        <form action="p_insertar_colaborador.php" method="post">
            <h2>Insertar Colaborador</h2>

            <div class="caja">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>

            <div class="caja">
                <label for="cargo">Cargo:</label>
                <input type="text" name="cargo" id="cargo" required>
            </div>

            <div class="caja">
                <label for="puesto">Puesto:</label>
                <select name="puesto" id="puesto" required>
                    <option value="Diseño Web">Diseño Web</option>
                    <option value="Diseño Gráfico">Diseño Gráfico</option>
                    <option value="Community Manager">Community Manager</option>
                </select>
            </div>

            <div class="caja">
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" required>
            </div>

            <div class="caja">
                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" name="fecha_ingreso" id="fecha_ingreso" required>
            </div>

            <input type="submit" value="Agregar Colaborador">
            <input type="reset" value="Cancelar">
        </form>
    </div>
</body>
</html>

