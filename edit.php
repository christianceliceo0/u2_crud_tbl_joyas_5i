<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de editar o no
if (isset($_POST['editar_joya'])) {
    // recuperar datos del formulario
    $id_joya = $_POST['id_joya'];
    $edit_kilates = $_POST['edit_kilates'];
    $edit_material = $_POST['edit_material'];
    $edit_peso = $_POST['edit_peso'];
    $edit_marca = $_POST['edit_marca'];
    $edit_precio = $_POST['edit_precio'];
    $edit_grosor = $_POST['edit_grosor'];
    $edit_fecha = $_POST['edit_fecha'];


    // Consulta
    $query = "UPDATE joya SET kilates='$edit_kilates', material='$edit_material', peso='$edit_peso', marca='$edit_marca', precio='$edit_precio', grosor='$edit_grosor', fabricacion='$edit_fecha' WHERE id_joyas = '$id_joya'";
    $resultado = mysqli_query($conexion, $query);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($resultado)
        header('Location: ./index.php?actualizar=exito');
    else
        header('Location: ./index.php?actualizar=error');
} else
    die("Acceso prohibido...");
