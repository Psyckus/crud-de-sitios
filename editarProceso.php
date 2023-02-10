<?php
    print_r($_POST);
<<<<<<< HEAD
    if(!isset($_POST['id_agenda'])){
=======
    if(!isset($_POST['telefono'])){
>>>>>>> 9d95feb9b6cb76e5321cb5ec6429a9ebdf1f53d3
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
<<<<<<< HEAD
    $id_agenda = $_POST['id_agenda'];
=======
>>>>>>> 9d95feb9b6cb76e5321cb5ec6429a9ebdf1f53d3
    $nombre = $_POST['txtNombre'];
    $apellidos = $_POST['txtApellidos'];
    $direccion = $_POST['txtDireccion'];
    $telefono = $_POST['txtTelefono'];
    $edad = $_POST['txtEdad'];
    $altura = $_POST['txtAltura'];

<<<<<<< HEAD
    $sentencia = $bd->prepare("UPDATE agenda SET nombre = ?, apellidos = ?, direccion = ?, telefono = ?, edad = ?, altura = ? where id_agenda = ?;");
    $resultado = $sentencia->execute([$nombre, $apellidos, $direccion, $telefono, $edad, $altura, $id_agenda ]);
=======
    $sentencia = $bd->prepare("UPDATE agenda SET nombre = ?, apellidos = ?, direccion = ?, telefono = ?, edad = ?, altura = ? where telefono = ?;");
    $resultado = $sentencia->execute([$nombre, $apellidos, $direccion, $telefono, $edad, $altura]);
>>>>>>> 9d95feb9b6cb76e5321cb5ec6429a9ebdf1f53d3

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>
