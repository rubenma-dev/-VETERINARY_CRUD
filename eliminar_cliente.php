<?php

    require 'db.php';

    $id_cliente = $_GET['id_cliente'];

    $conexiondb = conectardb();

    $query = "DELETE FROM cliente WHERE id_cliente=".$id_cliente;

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