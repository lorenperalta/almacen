<?php
$id_almacen = $datos[0]['id_almacen'];
$nombreDelAlmacen = $datos[0]['nombreDelAlmacen'];
$descripcion = $datos[0]['descripcion'];
?>

<section class="col-lg-7 connectedSortable">
    <div class="card">
        <div class="card-header  bg-primary">
            <h3 class="card-title text-white">
                <i class="fas fa-chart-pie mr-1"></i>
                Editar Almacen
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
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <form method="POST" action="<?php echo base_url() . '/Almacen/actualizar' ?>">
                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <label for="id_almacen">Id del almacen</label>
                                    <input style="border:none; border-bottom: 1px solid #ffc107; box-shadow: none"
                                        type="number" name="id_almacen" id="id_almacen" class="form-control"
                                        value="<?php echo $id_almacen ?>" hidden>
                                </div><br>
                                <div>
                                    <label for="nombreDelAlmacen">Nombre del almacen</label>
                                    <input style="border:none; border-bottom: 1px solid #ffc107; box-shadow: none;"
                                        type="text" name="nombreDelAlmacen" id="nombreDelAlmacen" class="form-control"
                                        value="<?php echo $nombreDelAlmacen ?>">
                                </div><br>
                                <div>
                                    <label for="descripcion">Descripcion</label>
                                    <input style="border:none; border-bottom: 1px solid #ffc107; box-shadow: none;"
                                        type="text" name="descripcion" id="descripcion" class="form-control"
                                        value="<?php echo $descripcion ?>">
                                </div><br>
                            </div>
                        </div>
                        <button class="btn btn-warning">Guardar</button>
                    </form>
                </div>
                <div class="chart tab-pane" id="sales-chart">

                </div>
            </div>
        </div><!-- /.card-body -->
    </div>
</section>