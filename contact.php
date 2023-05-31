<?php include("cabecera.php");?>
<?php include("conexion.php");?>

<?php
    /*-----------------------------------------------------------------------------*/
    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mensaje = $_POST['mensaje'];
        $objConexion = new conexion();
        $sql="INSERT INTO `proyectos` (`id`, `nombre`, `apellido`, `mensaje`) VALUES (NULL, '$nombre', '$apellido', '$mensaje');";
        $objConexion->ejecutar($sql);
        header('location: index.php');
    }
?>
<div class="card">
    <div class="card-header">
        <b>Contact Me</b>
    </div>
    <div class="card-body">
        <form action="contact.php" method="post" name="myForm" class="form-contact">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Apellido" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" name="mensaje" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea required>
            </div>
            <button type="submit" class="btn btn-success" id="btnEnviar">Enviar</button>
        </form>
    </div>
</div>


<?php
    include("footer.php");
?>