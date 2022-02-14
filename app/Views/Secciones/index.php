<?php
$nombreDelAlmacen = $dbAlmacen[0]['nombreDelAlmacen'];
?>


<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>

<h1>Almacen - <?php echo $nombreDelAlmacen ?></h1>

<form method="POST" action="<?php echo base_url() . '/Secciones/crear' ?>">
    <div class="row">
        <div class="col-6">
            <div hidden>
                <label for="idSeccion">idSeccion</label>
                <input type="number" name="idSeccion" id="idSeccion" class="form-control">
            </div><br>
            <div hidden>
                <label for="idAlmacen">idAlmacen</label>
                <input type="number" name="idAlmacen" id="idAlmacen" class="form-control" value="<?php echo $idAlm ?>">
            </div><br>
            <div>
                <label for="nombreSeccion">Nombre de seccion</label>
                <input type="text" name="nombreSeccion" id="nombreSeccion" class="form-control">
            </div><br>
            <div>
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
            </div><br>
            <div>
                <button class="btn btn-warning">Guardar</button>
            </div><br>
        </div>
    </div>
</form>
<table class="table  table-hover table-bordered">
    <tr class="table-dark">
        <th>Id de seccion</th>
        <th>Nombre del seccion</th>
        <th>Descripcion</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($datos as $key) : ?>
    <tr>
        <td><?php echo $key->idSeccion ?></td>
        <td><?php echo $key->nombreSeccion ?></td>
        <td><?php echo $key->descripcion ?></td>
        <td>
            <a href="<?php echo base_url() . '/Seccion/obtener/' . $key->idSeccion ?>"
                class="btn btn-warning btn-sm">Editar</a>
            <a href="<?php echo base_url() . '/Reportes/' . $key->idAlmacen ?>"
                class="btn btn-success btn-sm">Reportes</a>
            <a href="<?php echo base_url() . '/Secciones/eliminar/' . $key->idSeccion ?>"
                class="btn btn-danger btn-sm">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
let mensaje = '<?php echo $mensaje ?>';

if (mensaje == '1') {
    swal(':D', 'Agregado con exito!', 'success');
} else if (mensaje == '0') {
    swal(':(', 'Fallo al agregar!', 'error');
} else if (mensaje == '2') {
    swal(':D', 'Actualizado con exito!', 'success');
} else if (mensaje == '3') {
    swal(':(', 'Fallo al Actualizar!', 'error');
} else if (mensaje == '4') {
    swal(':D', 'Eliminado con exito!', 'success');
} else if (mensaje == '5') {
    swal(':(', 'Fallo al eliminar!', 'error');
}
</script>

<?= $this->endSection() ?>