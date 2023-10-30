<?php
include("./config.php");

if (isset($_POST['borrar_joya'])) {
    // Agarrar el id del registro que se va a borrar
    $id_joya = $_POST['id_joya'];

    // Consulta de borrado
    $query = "DELETE FROM joya WHERE id_joyas = '$id_joya'";
    $resultado = mysqli_query($conexion, $query);

    // ¿Se eliminó correctamente la consulta?
    if ($resultado) {
        header('Location: ./index.php?eliminar=exito');
    } else
        die('Location: ./index.php?eliminar=error');
} else
    die("acceso prohibido...");
