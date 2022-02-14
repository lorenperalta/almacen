<?php

use PHPUnit\Util\Type;

use function PHPSTORM_META\type;

$id_almacen = $datos[0]['id_almacen'];
$nombreDelAlmacen = $datos[0]['nombreDelAlmacen'];
$descripcion = $datos[0]['descripcion'];
?>

<?= $this->extend('Layout/menu') ?>
<?= $this->section('contenido') ?>
<br>
<h1>Alamacen - <?php echo $nombreDelAlmacen ?></h1>
<hr>
<div class="row">
    <table class="table  table-hover table-bordered">
        <tr class="table-dark">
            <th>id</th>
            <th>Producto</th>
            <th>unidad</th>
            <th>cantidad</th>
        </tr>
        <?php foreach ($dbmov as $key) : ?>
        <tr>
            <td><?php echo $key->id_almacen ?></td>
            <td><?php echo $key->nombreproducto ?></td>
            <td><?php echo $key->unidad ?></td>
            <td><?php echo $key->total ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>

<?= $this->endSection() ?>