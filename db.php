<?php
    function conectardb() {
        $servidor = 'localhost';
        $usuario = 'root';
        $contraseña = '';
        $personadb = 'veterinaria';

        $conexion = mysqli_connect($servidor, $usuario, $contraseña, $personadb);

        return $conexion;
    }
?>