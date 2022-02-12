<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>

<?php
$id_producto = $datos[0]['id_producto'];
$nombreproducto = $datos[0]['nombreproducto'];
$descripcion = $datos[0]['descripcion'];
?>


<form method="POST" action="<?php echo base_url() . '/Producto/actualizar' ?>">
    <div class="row">
        <div class="col-6">
            <div>
                <label for="id_almacen"></label>
                <input  type="number"
                    name="id_producto" id="id_producto" class="form-control" value="<?php echo $id_producto ?>" hidden>
            </div><br>
            <div>
                <label for="nombreproducto">Nombre del almacen</label>
                <input  type="text"
                    name="nombreproducto" id="nombreproducto" class="form-control"
                    value="<?php echo $nombreproducto ?>">
            </div><br>
            <div>
                <label for="descripcion">Descripcion</label>
                <input  type="text"
                    name="descripcion" id="descripcion" class="form-control" value="<?php echo $descripcion ?>">
            </div><br>
        </div>
    </div>
    <button class="btn btn-warning">Guardar</button>
</form>
<?= $this->endSection() ?>