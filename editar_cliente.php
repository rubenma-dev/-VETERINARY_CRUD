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
    $id_cliente = $_GET['id_cliente'];
    $query = "SELECT * FROM cliente WHERE id_cliente=" . $id_cliente;
    $respuesta = mysqli_query($conexiondb, $query);
    $persona = mysqli_fetch_row($respuesta);
    mysqli_close($conexiondb);
    ?>


    <h1>Editar Vacunacion</h1>

    <form action="guardar_cliente.php" method="post">
        <table border="0">
            <tr>
                <th><b><label for="">CEDULA:</label></b></th>
                <th><input type="text" name="cedula" id="" value='<?php echo $persona[1]; ?>'></th>
            </tr>

            <tr>
                <th><b><label for="">NOMBRE:</label></b></th>
                <th><input type="text" name="Nombre_cliente" id="" value='<?php echo $persona[2]; ?>'></th>
            </tr>
            <tr>
                <th><b><label for="">APELLIDO:</label></b></th>
                <th><input type="text" name="apellido_cliente" id="" value='<?php echo $persona[3]; ?>'></th>
            </tr>
            <tr>
                <th><b><label for="">TELEFONO:</label></b></th>
                <th><input type="text" name="telefono" id="" value='<?php echo $persona[4]; ?>'></th>
            </tr>
        </table>
        <input type="hidden" name="id_cliente" id="" value='<?php echo $persona[0] ?>' readonly>
        <input type="hidden" name="editar" id="" value='si' readonly>
        <input type="submit" value="GUARDAR">
    </form>
</body>

</html>