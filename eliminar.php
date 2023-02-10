<?php 
    if(!isset($_GET['telefono'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $telefono = $_GET['telefono'];

    $sentencia = $bd->prepare("DELETE FROM agenda where telefono = ?;");
    $resultado = $sentencia->execute([$telefono]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>
