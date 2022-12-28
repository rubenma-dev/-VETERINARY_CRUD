<?php

    require 'db.php';

    $id_vacunacion = $_GET['id_vacunacion'];

    $conexiondb = conectardb();

    $query = "DELETE FROM vacuna WHERE id_vacunacion=".$id_vacunacion;

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