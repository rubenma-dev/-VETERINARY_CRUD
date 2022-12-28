<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
</head>

<body>

    <?php
    include('menu.php')
    ?>

    <?php
    include 'db.php';
    $conexiondb = conectardb();
    $id_vacuna = $_GET['id_vacunacion'];
    $query = "SELECT * FROM vacuna WHERE id_vacunacion=" . $id_vacuna;
    $respuesta = mysqli_query($conexiondb, $query);
    $persona = mysqli_fetch_row($respuesta);
    mysqli_close($conexiondb);
    ?>


    <h1>Editar Vacunacion</h1>

    <form action="guardar_vacunacion.php" method="post">
        <table border="0">
            <tr>
                <th><b><label for="">FECHA:</label></b></th>
                <th><input type="text" name="fecha" id="" value='<?php echo $persona[1]; ?>'></th>
            </tr>

            <tr>
                <th><b><label for="">Dosis:</label></b></th>
                <th><input type="text" name="dosis" id="" value='<?php echo $persona[2]; ?>'></th>
            </tr>
            <tr>
                <th><b><label for="">mascota:</label></b></th>
                <th><input type="text" name="id_mascota" id="" value='<?php echo $persona[3]; ?>'></th>
            </tr>
            <tr>
                <th><b><label for="">Veterinario:</label></b></th>
                <th><input type="text" name="nombre_veterinario" id="" value='<?php echo $persona[4]; ?>'></th>
            </tr>
        </table>
        <input type="hidden" name="id_vacunacion" id="" value='<?php echo $persona[0] ?>' readonly>
        <input type="hidden" name="editar" id="" value='si' readonly>
        <input type="submit" value="GUARDAR">
    </form>
</body>

</html>