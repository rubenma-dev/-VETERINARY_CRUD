<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Persona</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    include('menu.php')
    ?>

    <div class="col-sm-4 offset-sm-4">
        <br>
        <form action="guardar_cliente.php" method="post">

            <!--<input type="hidden" name="">-->

            <H3>
                <th><b><label for="">REGISTRO DE CLIENTE:</label></b></th>
            </H3>

            <div class="mb-3">
                <th><b><label for="">CEDULA:</label></b></th>
                <th><input class="form-control" type="text" name="cedula" id=""></th>
            </div>
            <div class="mb-3">
                <th><b><label for="">NOMBRE:</label></b></th>
                <th><input class="form-control" type="text" name="nombre_cliente" id=""></th>
            </div>
            <div class="mb-3">
                <th><b><label for="">APELLIDO:</label></b></th>
                <th><input class="form-control" type="text" name="apellido_cliente" id=""></th>
            </div>
            <div class="mb-3">
                <th><b><label for="">TELEFONO:</label></b></th>
                <th><input class="form-control" type="text" name="telefono" id=""></th>
            </div>
            <input type="hidden" name="editar" id="" value='no' readonly>
            <input class="btn btn-outline-primary" type="submit" value="GUARDAR">
        </form>
    </div>

    <link rel="stylesheet" href="./css/index.css">
</body>

</html>