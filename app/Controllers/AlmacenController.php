<?php

namespace App\Controllers;

use App\Models\AlmacenModel;

class AlmacenController extends BaseController
{

    public function index()
    {
        $almacen = new AlmacenModel();
        $datos = $almacen->listar();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        return view('Almacen/index', $data);
    }

    public function crear()
    {
        $datos = [
            "nombreDelAlmacen" => $_POST['nombreDelAlmacen'],
            "descripcion" => $_POST['descripcion'],
        ];

        $almacen = new AlmacenModel();
        $almacen->insertar($datos);
    }

    public function actualizar()
    {
        $datos = [
            "nombreDelAlmacen" => $_POST['nombreDelAlmacen'],
            "descripcion" => $_POST['descripcion'],
        ];

        $almacen = new AlmacenModel();
        $idAlmacen = $_POST['id_almacen'];
        $respuesta = $almacen->actualizar($datos, $idAlmacen);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Almacen')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/Almacen')->with('mensaje', '3');
        }
    }

    public function obtener($idAlmacen)
    {
        $data = ["id_almacen" => $idAlmacen];
        $almacen = new AlmacenModel();
        $respuesta = $almacen->obtenerDatos($data);

        $datos = ["datos" => $respuesta];

        return view('Almacen/actualizar', $datos);
    }

    public function eliminar($idAlmacen)
    {
        $almacen = new AlmacenModel();
        $data = ["id_almacen" => $idAlmacen];

        $respuesta = $almacen->eliminar($data);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Almacen')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/Almacen')->with('mensaje', '5');
        }
    }
}