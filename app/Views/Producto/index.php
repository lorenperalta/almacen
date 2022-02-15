<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>

<form method="POST" action="<?php echo base_url() . '/Producto/crear' ?>">
    <div class="row">
        <div class="col-6 align-self-center">
            <div hidden>
                <label for="id_producto">id del almacen</label>
                <input type="number" name="id_producto" id="id_producto" class="form-control">
            </div><br>
            <div>
                <label for="nombreproducto">Nombre del Producto</label>
                <input type="text" name="nombreproducto" id="nombreproducto" class="form-control">
            </div><br>
            <div>
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
            </div><br>
            <div>
                <label for="unidad">Unidad</label>
                <select class="form-control" id="unidad" name="unidad">
                    <option value="Unidad">Unidad</option>
                    <option value="Litros">Litros</option>
                    <option value="Kilogramo">Kilogramo</option>
                    <option value="Kilogramo">Metros</option>
                </select>
            </div>
            <div>
                <button class="btn btn-warning">Guardar</button>
            </div>
        </div>
    </div>
</form>
<hr class="dropdown-divider">
<table class="table  table-hover table-bordered border-dark">
    <tr class="table-dark">
        <th class="col">id producto</th>
        <th>Nombre del producto</th>
        <th>Descripcion</th>
        <th>unidad</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($datos as $key) : ?>
    <tr>
        <td><?php echo $key->id_producto ?></td>
        <td><?php echo $key->nombreproducto ?></td>
        <td><?php echo $key->descripcion ?></td>
        <td><?php echo $key->unidad ?></td>
        <td>
            <a href="<?php echo base_url() . '/Producto/obtener/' . $key->id_producto ?>"
                class="btn btn-warning btn-sm">Editar</a>
            <a href="<?php echo base_url() . '/Producto/eliminar/' . $key->id_producto ?>"
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