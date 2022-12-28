<?php

include 'db.php';

$cedula = $_POST['cedula'];
$nombre = $_POST['Nombre_cliente'];
$apellido = $_POST['apellido_cliente'];
$telefono = $_POST['telefono'];
$editar = $_POST['editar'];

$conexiondb = conectardb();

if ($editar == "si") {
    $id_cliente = $_POST['id_cliente'];
    $query = "UPDATE cliente SET cedula='" . $cedula . "', Nombre_cliente='" . $nombre . "', apellido_cliente='" . $apellido . "', telefono='" . $telefono . "' WHERE id_cliente=" . $id_cliente;
} else {
    $query = "INSERT INTO cliente (cedula, nombre_cliente, apellido_cliente, telefono) VALUES 
    ('$cedula', '$nombre', '$apellido', '$telefono')";
}

$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    if ($editar == "si") {
        echo "<script>alert('Se registro el paciente');
                                window.location.href='registrar_cliente.php'</script>";
    } else {
        echo "<script>alert('Se registro el paciente');
                                window.location.href='registrar_cliente.php'</script>";
    }
} else {
    if ($editar == "si") {
        echo ("No se pudo actualizar la persona");
    } else {
        echo ("No se pudo registrar la persona");
    }
}
  mysqli_close($conexiondb);
  ?>