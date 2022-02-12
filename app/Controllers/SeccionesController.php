<?php

namespace App\Controllers;

use App\Models\SeccionesModel;
use App\Models\AlmacenModel;

class SeccionesController extends BaseController
{

    public function index($id)
    {
        // $datos = $seccion->listar();
        $seccion = new SeccionesModel();
        $almacen = new AlmacenModel();

        $consulta = ["id_almacen" => $id];

        $dbAlmacen = $almacen->obtenerDatos($consulta);
        $datos = $seccion->ListarById($id);

        $mensaje = session('mensaje');
        $data = [
            "idAlm" => $id,
            "datos" => $datos,
            "dbAlmacen" => $dbAlmacen,
            "mensaje" => $mensaje
        ];
        return view('Secciones/index', $data);
    }

    public function crear()
    {
        $datos = [
            "idAlmacen" => $_POST['idAlmacen'],
            "nombreSeccion" => $_POST['nombreSeccion'],
            "descripcion" => $_POST['descripcion'],
        ];

        $seccion = new SeccionesModel();
        $respuesta = $seccion->insertar($datos);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Secciones/' . $_POST['idAlmacen'])->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/Secciones/' . $_POST['idAlmacen'])->with('mensaje', '0');
        }
    }

    public function actualizar()
    {
        $datos = [
            "idAlmacen" => $_POST['idAlmacen'],
            "nombreSeccion" => $_POST['nombreSeccion'],
            "descripcion" => $_POST['descripcion'],
        ];

        $seccion = new SeccionesModel();
        $idSeccion = $_POST['idSeccion'];
        $respuesta = $seccion->actualizar($datos, $idSeccion);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Secciones')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/Secciones')->with('mensaje', '3');
        }
    }

    public function obtener($idSeccion)
    {
        $data = ["idSeccion" => $idSeccion];
        $seccion = new SeccionesModel();
        $respuesta = $seccion->obtenerDatos($data);

        $datos = ["datos" => $respuesta];

        return view('Secciones/actualizar', $datos);
    }

    public function eliminar($idSeccion)
    {
        $almacen = new SeccionesModel();
        $data = ["idSeccion" => $idSeccion];

        $respuesta = $almacen->eliminar($data);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Secciones')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/Secciones')->with('mensaje', '5');
        }
    }
}