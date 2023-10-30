<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de registro o no
if (isset($_POST['registrar'])) {
    // recuperar datos del formulario
    $kilates = $_POST['kilates'];
    $material = $_POST['material'];
    $peso = $_POST['peso'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $grosor = $_POST['grosor'];
    $fecha = $_POST['fecha'];

    // Consulta
    $query = "INSERT INTO joya(kilates, material, peso, marca, precio, grosor, fabricacion)
    VALUES('$kilates', '$material', '$peso', '$marca', '$precio', '$grosor', '$fecha')";
    $resultado = mysqli_query($conexion, $query);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($resultado)
        header('Location: ./index.php?resultado=exito');
    else
        header('Location: ./index.php?resultado=error');
} else
    die("Akses dilarang...");
