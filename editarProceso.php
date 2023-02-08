<?php
    print_r($_POST);
    if(!isset($_POST['telefono'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $nombre = $_POST['txtNombre'];
    $apellidos = $_POST['txtApellidos'];
    $direccion = $_POST['txtDireccion'];
    $telefono = $_POST['txtTelefono'];
    $edad = $_POST['txtEdad'];
    $altura = $_POST['txtAltura'];

    $sentencia = $bd->prepare("UPDATE agenda SET nombre = ?, apellidos = ?, direccion = ?, telefono = ?, edad = ?, altura = ? where telefono = ?;");
    $resultado = $sentencia->execute([$nombre, $apellidos, $direccion, $telefono, $edad, $altura]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>
