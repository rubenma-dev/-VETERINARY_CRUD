<?php

include 'db.php';

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$nacimiento = $_POST['fecha_nacimiento'];
$raza = $_POST['raza'];

$conexiondb = conectardb();

if ($editar == "si") {
    $id_mascota = $_POST['id_mascota'];
    $query = "UPDATE mascota SET codigo='" . $codigo . "', nombre='" . $nombre . "', fecha_nacimiento='" . $nacimiento . "', raza='" . $raza . "' WHERE id_mascota=" . $id_mascota;
} else {
    $query = "INSERT INTO mascota (codigo, nombre, fecha_nacimiento, raza) VALUES 
    ('$codigo', '$nombre', '$nacimiento', '$raza')";
}

$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
        echo ("<script>alert('Se registro la Mascota');
        window.location.href='registrar_mascota.php'</script>");;
    } else {
        echo ("<script>alert('Se registro la Mascota');
        window.location.href='registrar_mascota.php'</script>");;
    }
  mysqli_close($conexiondb);
  ?>