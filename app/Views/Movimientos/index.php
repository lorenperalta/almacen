<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>

<form method="POST" action="<?php echo base_url() . '/Movimientos/crear' ?>">
    <div class="row">
        <div class="col-3">
            <div >
                
                <input type="hidden" name="id_almacen" id="id_almacen" value="<?php echo $pidalmacen ?>" class="form-control">
                <input type="hidden" name="movimiento" id="movimiento" value="<?php echo $pmovimiento ?>" class="form-control">
                <label for="id_producto">Productos</label>
                <select class="form-control" id="id_producto" name="id_producto">
                    <?php foreach ($dbProductos as $key) : ?>
                    <option value=<?php echo  $key->id_producto ?>><?php echo  $key->nombreproducto ?>// cantidad 20
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
                <input type="number" name="cantidad" id="cantidad" class="form-control">
            </div><br>
        </div>
        <div class="col-3">
            <div>
                <label for="cliente">Cliente</label>
                <input type="text" name="cliente" id="cliente" class="form-control">
            </div><br>
            <div>
                <label for="unidad">Unidad</label>
                <select class="form-control" id="unidad" name="unidad">
                    <option value="Unidad">Unidad</option>
                    <option value="Litros">Litros</option>
                    <option value="Kilogramo">Kilogramo</option>
                </select>
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
            <button class="btn btn-warning">Ingresar</button>
        </div>
    </div>
</form>


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