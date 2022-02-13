<?php $id_almacen = $datos[0]['id_almacen'];
$nombreDelAlmacen = $datos[0]['nombreDelAlmacen'];
$descripcion = $datos[0]['descripcion']; ?>
<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>
<br>
<h1>Alamacen - <?php echo $nombreDelAlmacen ?></h1>
<div class="row">
    <div class="col-sm-2"><a href="a"><button class="btn btn-primary">Ingresar</button></a></div>
    <div class="col-sm-2"><a href="a"><button class="btn btn-success">Salida</button></a></div>
    <div class="col-sm-2"><a href="a"><button class="btn btn-info">sirve</button></a></div>
    <div class="col-sm-2"><a href="a"><button class="btn btn-warning">no sirve</button></a></div>
   
    
   
    
</div>
<hr>
<div class="row">
<table class="table  table-hover table-bordered">
    <tr class="table-dark">
        <th>id</th>
        <th>Fecha</th>
        <th>Cliente</th>
        <th>Movimiento</th>
        <th>Producto</th>
        <th>unidad</th>
        <th>cantidad</th>
        <th>Acciones</th>
    </tr>
    
</table>
</div>

<?= $this->endSection() ?>
