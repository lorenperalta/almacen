<?php

namespace App\Controllers;

use App\Models\UnidadModel;
use App\Models\MovimientosModel;

class UnidadController extends BaseController
{

    public function index()
    {
        $almacen = new UnidadModel();
        $datos = $almacen->listar();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        return view('Configuracion/index', $data);
    }

    public function crear()
    {
        $datos = [
            "nombreunidad" => $_POST['nombreunidad'],
            "descripcion" => $_POST['descripcion'],
        ];

        $almacen = new UnidadModel();
        $respuesta = $almacen->insertar($datos);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Configuracion')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/Configuracion')->with('mensaje', '0');
        }
    }

    public function actualizar()
    {
        $datos = [
            "nombreunidad" => $_POST['nombreunidad'],
            "descripcion" => $_POST['descripcion'],
        ];

        $almacen = new UnidadModel();
        $idAlmacen = $_POST['id_unidad'];
        $respuesta = $almacen->actualizar($datos, $idAlmacen);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Configuracion')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/Configuracion')->with('mensaje', '3');
        }
    }

    public function obtener($idAlmacen)
    {
        $data = ["id_unidad" => $idAlmacen];
        $almacen = new UnidadModel();
        $respuesta = $almacen->obtenerDatos($data);

        $datos = ["datos" => $respuesta];

        return view('Configuracion/actualizar', $datos);
    }
    public function alm($idAlmacen)
    {
        $data = ["id_almacen" => $idAlmacen];
        $almacen = new UnidadModel();
        $respuesta = $almacen->obtenerDatos($data);
        $mov = new MovimientosModel();
        $dbmov = $mov->listarpro($idAlmacen);

        $datos = [
            "datos" => $respuesta,
            "dbmov" => $dbmov,
    ];

        return view('Configuracion/gestion', $datos);
    }

    public function eliminar($idAlmacen)
    {
        $almacen = new UnidadModel();
        $data = ["id_almacen" => $idAlmacen];

        $respuesta = $almacen->eliminar($data);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Configuracion')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/Configuracion')->with('mensaje', '5');
        }
    }
}