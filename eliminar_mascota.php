<?php

    require 'db.php';

    $id_mascota = $_GET['id_mascota'];

    $conexiondb = conectardb();

    $query = "DELETE FROM mascota WHERE id_mascota=".$id_mascota;

    $respuesta = mysqli_query($conexiondb, $query);

    if ($respuesta) 
    {
            echo "<script>alert('Se elimino el registro');
            window.location.href='listado.php'</script>";} 
            else {
                    echo "<script>alert('No se pudo eliminar el registro');
                    window.location.href='listado.php'</script>";
}
?>