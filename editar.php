<?php include 'template/header.php' ?>

<?php
<<<<<<< HEAD
    if(!isset($_GET['id_agenda'])){
=======
    if(!isset($_GET['telefono'])){
>>>>>>> 9d95feb9b6cb76e5321cb5ec6429a9ebdf1f53d3
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
<<<<<<< HEAD
    $id_agenda = $_GET['id_agenda'];

    $sentencia = $bd->prepare("select * from agenda where id_agenda = ?;");
    $sentencia->execute([$id_agenda]);
    $agenda = $sentencia->fetch(PDO::FETCH_OBJ);
   // print_r($agenda);
=======
    $telefono = $_GET['telefono'];

    $sentencia = $bd->prepare("SELECT * FROM agenda where telefono = ?;");
    $sentencia->execute([$telefono]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    print_r($persona);
>>>>>>> 9d95feb9b6cb76e5321cb5ec6429a9ebdf1f53d3
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $agenda->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellidos: </label>
                        <input type="text" class="form-control" name="txtApellidos" autofocus required
                        value="<?php echo $agenda->apellidos; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección: </label>
                        <input type="text" class="form-control" name="txtDireccion" autofocus required
                        value="<?php echo $agenda->direccion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="text" class="form-control" name="txtTelefono" autofocus required
                        value="<?php echo $agenda->telefono; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellidos: </label>
                        <input type="text" class="form-control" name="txtApellidos" autofocus required
                        value="<?php echo $persona->apellidos; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección: </label>
                        <input type="text" class="form-control" name="txtDireccion" autofocus required
                        value="<?php echo $persona->direccion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="text" class="form-control" name="txtTelefono" autofocus required
                        value="<?php echo $persona->telefono; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required
                        value="<?php echo $agenda->edad; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Altura: </label>
                        <input type="text" class="form-control" name="txtAltura" autofocus required
<<<<<<< HEAD
                        value="<?php echo $agenda->altura; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id_agenda" value="<?php echo $agenda->id_agenda; ?>">
=======
                        value="<?php echo $persona->altura; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="telefono" value="<?php echo $persona->telefono; ?>">
>>>>>>> 9d95feb9b6cb76e5321cb5ec6429a9ebdf1f53d3
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>
