<section class="col-lg-7 connectedSortable">
    <div class="card">
        <div class="card-header  bg-primary">
            <h3 class="card-title text-white">
                <i class="fas fa-chart-pie mr-1"></i>
                Almacen
            </h3>
            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-dark active text-white" href="#revenue-chart"
                            data-toggle="tab">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-dark text-white" href="#sales-chart"
                            data-toggle="tab">Listar</a>
                    </li>
                </ul>
            </div>
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart">
                    <form method="POST" action="<?php echo base_url() . '/Almacen/crear' ?>">
                        <div class="row">
                            <div class="col-6">
                                <div hidden>
                                    <label for="id_almacen">id del almacen</label>
                                    <input type="number" name="id_almacen" id="id_almacen" class="form-control">
                                </div><br>
                                <div>
                                    <label for="nombreDelAlmacen">Nombre del almacen</label>
                                    <input type="text" name="nombreDelAlmacen" id="nombreDelAlmacen"
                                        class="form-control">
                                </div><br>
                                <div>
                                    <label for="descripcion">Descripcion</label>
                                    <input type="text" name="descripcion" id="descripcion" class="form-control">
                                </div><br>
                                <div>
                                    <button class="btn btn-warning">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Id del almacen</th>
                            <th>Nombre del almacen</th>
                            <th>Descripcion</th>
                        </tr>
                        <?php foreach ($datos as $key) : ?>
                        <tr>
                            <td><?php echo $key->id_almacen ?></td>
                            <td><?php echo $key->nombreDelAlmacen ?></td>
                            <td><?php echo $key->descripcion ?></td>
                            <td>
                                <a href="<?php echo base_url() . '/Almacen/obtener/' . $key->id_almacen ?>"
                                    class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url() . '/Almacen/eliminar/' . $key->id_almacen ?>"
                                    class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div><!-- /.card-body -->
    </div>
</section>


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