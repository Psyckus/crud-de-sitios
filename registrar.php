<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtapellidos"]) || empty($_POST["txtdireccion"]) || empty($_POST["txttelefono"]) || empty($_POST["txtedad"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $apellidos = $_POST["txtapellidos"];
    $direccion = $_POST["txtdireccion"];
    $telefono = $_POST["txttelefono"];
    $edad = $_POST["txtedad"];

    $sentencia = $bd->prepare("INSERT INTO agenda(nombre,apellidos,direccion,telefono,edad) VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombre,$apellidos,$direccion,$telefono,$edad]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>