<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>

<?php $id = 0; ?>
<?php foreach ($dbsecciones as $key) : ?>
<?php $id++; ?>
<?php echo $id; ?>
<?php endforeach; ?>

<?php
$id_almacen = $datos[0]['id_almacen'];
$nombreDelAlmacen = $datos[0]['nombreDelAlmacen'];
$descripcion = $datos[0]['descripcion'];
?>

<form method="POST" action="<?php echo base_url() . '/Movimientos/crear' ?>">
    <div class="row">
        <div class="col-3">
            <div>

                <input type="hidden" name="id_almacen" id="id_almacen" value="<?php echo $pidalmacen ?>"
                    class="form-control">
                <input type="hidden" name="movimiento" id="movimiento" value="<?php echo $pmovimiento ?>"
                    class="form-control">
                <label for="id_producto">Productos</label>
                <select class="form-control" id="id_producto" name="id_producto">
                    <?php foreach ($dbProductos as $key) : ?>
                    <option onclick="seleccionarTipo(<?php echo $key->id_producto; ?>)"
                        value=<?php echo  $key->id_producto ?>>
                        <?php echo  $key->nombreproducto ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div><br>
            <div>

            </div><br>
        </div>
        <div class="col-3">
            <div>
                <label for="id_seccion">Seccion</label>
                <select class="form-control" id="id_seccion" name="id_seccion">
                    <?php foreach ($dbsecciones as $key) : ?>
                    <option value=<?php echo  $key->idSeccion ?>><?php echo  $key->nombreSeccion ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div><br>
            <div>
                <label for="cantidad">Cantidad</label>
                <input type="number" min="0" max="" name="cantidad" id="cantidad" class="form-control">
            </div><br>
        </div>
        <div class="col-3">
            <div>
                <label for="cliente">Cliente</label>
                <input type="text" name="cliente" id="cliente" class="form-control">
            </div><br>
        </div>
        <div>
            <label for="concepto">Concepto</label>
            <div>
                <textarea name="concepto" id="concepto" cols="80" rows="5"></textarea>
            </div><br>
        </div>
        <div class="col-3">
            <div>
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control">
            </div><br>
        </div>
        <div class="col-3">
            <div>
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control">
            </div><br>
        </div>
        <div>
            <button class="btn btn-warning"><?php if ($pmovimiento == 'ingreso') {
                                                echo 'Ingreso';
                                            } else {
                                                echo 'Egreso';
                                            } ?></button>
        </div>
    </div>
</form>

<hr>
<div class="row">
    <table class="table  table-hover table-bordered">
        <tr class="table-dark">
            <th>id</th>
            <th>Producto</th>
            <th>unidad</th>
            <th>cantidad</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($dbmov as $key) : ?>
        <tr>
            <td><?php echo $key->id_almacen ?></td>
            <td><?php echo $key->nombreproducto ?></td>
            <td><?php echo $key->unidad ?></td>
            <td id="<?php echo $key->id_producto; ?>"><?php echo $key->total ?></td>
            <td>
                <a href="<?php echo base_url() . '/Detalles/obtener/' . $key->id_producto ?>"
                    class="btn btn-success btn-sm">Detalles</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>
<?php if($pmovimiento == 'egreso'){?>
<script>
function seleccionarTipo(tipo) {
    let cantidadValor = document.getElementById('cantidad');
    let valor = JSON.parse(document.getElementById(tipo).textContent);
    cantidadValor.max = valor;
}
</script>
<?php } ?>
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