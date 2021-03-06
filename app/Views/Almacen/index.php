<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>

<h1>Almacen</h1>

<form method="POST" action="<?php echo base_url() . '/Almacen/crear' ?>">
    <div class="row">
        <div class="col-6 align-self-center">
            <div hidden>
                <label for="id_almacen">id del almacen</label>
                <input type="number" name="id_almacen" id="id_almacen" class="form-control">
            </div><br>
            <div>
                <label for="nombreDelAlmacen">Nombre del almacen</label>
                <input type="text" name="nombreDelAlmacen" id="nombreDelAlmacen" class="form-control">
            </div><br>
            <div>
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
            </div><br>
            <div>
                <button class="btn btn-warning">Guardar</button>
            </div>
        </div>
    </div>
</form>
<hr class="dropdown-divider">
<table class="table  table-hover table-bordered border-dark">
    <tr class="table-dark">
        <th class="col" >Id del almacen</th>
        <th>Nombre del almacen</th>
        <th>Descripcion</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($datos as $key) : ?>
    <tr>
        <td><?php echo $key->id_almacen ?></td>
        <td><?php echo $key->nombreDelAlmacen ?></td>
        <td><?php echo $key->descripcion ?></td>
        <td>
            <a href="<?php echo base_url() . '/Almacen/obtener/' . $key->id_almacen ?>"
                class="btn btn-warning btn-sm">Editar</a>
            <a href="<?php echo base_url() . '/Secciones/' . $key->id_almacen ?>"
                class="btn btn-success btn-sm">Secciones</a>
            <a href="<?php echo base_url() . '/Almacen/eliminar/' . $key->id_almacen ?>"
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