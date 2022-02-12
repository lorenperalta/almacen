<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>

<?php
$id_almacen = $datos[0]['id_almacen'];
$nombreDelAlmacen = $datos[0]['nombreDelAlmacen'];
$descripcion = $datos[0]['descripcion'];
?>


<form method="POST" action="<?php echo base_url() . '/Almacen/actualizar' ?>">
    <div class="row">
        <div class="col-6">
            <div>
                <label for="id_almacen">Id del almacen</label>
                <input style="border:none; border-bottom: 1px solid #ffc107; box-shadow: none" type="number"
                    name="id_almacen" id="id_almacen" class="form-control" value="<?php echo $id_almacen ?>" hidden>
            </div><br>
            <div>
                <label for="nombreDelAlmacen">Nombre del almacen</label>
                <input style="border:none; border-bottom: 1px solid #ffc107; box-shadow: none;" type="text"
                    name="nombreDelAlmacen" id="nombreDelAlmacen" class="form-control"
                    value="<?php echo $nombreDelAlmacen ?>">
            </div><br>
            <div>
                <label for="descripcion">Descripcion</label>
                <input style="border:none; border-bottom: 1px solid #ffc107; box-shadow: none;" type="text"
                    name="descripcion" id="descripcion" class="form-control" value="<?php echo $descripcion ?>">
            </div><br>
        </div>
    </div>
    <button class="btn btn-warning">Guardar</button>
</form>
<?= $this->endSection() ?>