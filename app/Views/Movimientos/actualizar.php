<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>

<?php
$idSeccion = $datos[0]['idSeccion'];
$idAlmacen = $datos[0]['idAlmacen'];
$nombreSeccion = $datos[0]['nombreSeccion'];
$descripcion = $datos[0]['descripcion'];
?>

<h1>Secciones actualizar</h1>

<form method="POST" action="<?php echo base_url() . '/Secciones/actualizar' ?>">
    <div class="row">
        <div class="col-6">
            <div hidden>
                <label for="idSeccion">Id del almacen</label>
                <input type="number" name="idSeccion" id="idSeccion" class="form-control"
                    value="<?php echo $idSeccion ?>">
            </div><br>
            <div hidden>
                <label for="idAlmacen">Id del almacen</label>
                <input type="number" name="idAlmacen" id="idAlmacen" class="form-control"
                    value="<?php echo $idAlmacen ?>">
            </div><br>
            <div>
                <label for="nombreSeccion">Nombre del almacen</label>
                <input type="text" name="nombreSeccion" id="nombreSeccion" class="form-control"
                    value="<?php echo $nombreSeccion ?>">
            </div><br>
            <div>
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control"
                    value="<?php echo $descripcion ?>">
            </div><br>
        </div>
    </div>
    <button class="btn btn-warning">Guardar</button>
</form>
<?= $this->endSection() ?>