<?php
    print_r($_POST);
    if(!isset($_POST['id_agenda'])){
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $id_agenda = $_POST['id_agenda'];
    $nombre = $_POST['txtNombre'];
    $apellidos = $_POST['txtApellidos'];
    $direccion = $_POST['txtDireccion'];
    $telefono = $_POST['txtTelefono'];
    $edad = $_POST['txtEdad'];
    $altura = $_POST['txtAltura'];

    $sentencia = $bd->prepare("UPDATE agenda SET nombre = ?, apellidos = ?, direccion = ?, telefono = ?, edad = ?, altura = ? where id_agenda = ?;");
    $resultado = $sentencia->execute([$nombre, $apellidos, $direccion, $telefono, $edad, $altura, $id_agenda ]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>