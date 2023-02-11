<?php 
    if(!isset($_GET['id_agenda'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $id_agenda = $_GET['id_agenda'];

    $sentencia = $bd->prepare("DELETE FROM agenda where id_agenda = ?;");
    $resultado = $sentencia->execute([$id_agenda]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
    
?>
