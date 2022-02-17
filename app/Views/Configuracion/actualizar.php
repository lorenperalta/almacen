<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>

<?php
$id_almacen = $datos[0]['id_unidad'];
$nombreDelAlmacen = $datos[0]['nombreunidad'];
$descripcion = $datos[0]['descripcion'];
?>


<form method="POST" action="<?php echo base_url() . '/Configuracion/actualizar' ?>">
    <div class="row">
        <div class="col-6">
            <div>
                <label for="id_unidad">Id del almacen</label>
                <input  type="number"
                    name="id_unidad" id="id_unidad" class="form-control" value="<?php echo $id_almacen ?>" hidden>
            </div><br>
            <div>
                <label for="nombreunidad">Nombre del almacen</label>
                <input  type="text"
                    name="nombreunidad" id="nombreunidad" class="form-control"
                    value="<?php echo $nombreDelAlmacen ?>">
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