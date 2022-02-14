<?php

namespace App\Controllers;

use App\Models\AlmacenModel;
use App\Models\ReportesModel;

class ReportesController extends BaseController
{

    public function alm($idAlmacen)
    {
        $data = ["id_almacen" => $idAlmacen];
        $almacen = new AlmacenModel();
        $respuesta = $almacen->obtenerDatos($data);
        $mov = new ReportesModel();
        $dbmov = $mov->listarpro($idAlmacen);

        $datos = [
            "datos" => $respuesta,
            "dbmov" => $dbmov,
        ];

        return view('Reportes/index', $datos);
    }
}