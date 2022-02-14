<?php $id_almacen = $datos[0]['id_almacen'];
$nombreDelAlmacen = $datos[0]['nombreDelAlmacen'];
$descripcion = $datos[0]['descripcion']; ?>
<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>
<br>
<h1>Alamacen - <?php echo $nombreDelAlmacen ?></h1>
<div class="row">
    <div class="col-sm-2"><a href="<?php echo base_url() . '/Movimientos/' . $id_almacen . '/entrada' ?>"><button
                class="btn btn-primary">Ingresar</button></a></div>
    <div class="col-sm-2"><a href="<?php echo base_url() . '/Movimientos/' . $id_almacen . '/salida' ?>"><button
                class="btn btn-success">Salida</button></a></div>
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
        <?php foreach ($dbmov as $key) : ?>
        <tr>
            <td><?php echo $key->id_almacen ?></td>
            <td><?php echo $key->fecha ?></td>
            <td><?php echo $key->cliente ?></td>
            <td><?php echo $key->movimiento ?></td>
            <td><?php echo $key->nombreproducto ?></td>
            <td><?php echo $key->unidad ?></td>
            <td><?php echo $key->cantidad ?></td>
            <td>
                <a href="<?php echo base_url() . '/Almacen/obtener/' . $key->id_almacen ?>"
                    class="btn btn-warning btn-sm">Editar</a>
                <a href="<?php echo base_url() . '/Almacen/eliminar/' . $key->id_almacen ?>"
                    class="btn btn-danger btn-sm">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>

<?= $this->endSection() ?>