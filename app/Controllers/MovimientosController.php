<?php

namespace App\Controllers;

use App\Models\MovimientosModel;
use App\Models\ProductoModel;
use App\Models\SeccionesModel;
use App\Models\AlmacenModel;
use App\Models\ReportesModel;

class MovimientosController extends BaseController
{

    public function index($idalmacen, $movimiento)
    {
        $movimientos = new MovimientosModel();
        $productos = new ProductoModel();
        $secciones = new SeccionesModel();

        $dbProductos = $productos->listar();
        $dbsecciones = $secciones->listar();

        $datos = $movimientos->listar();
        $mensaje = session('mensaje');

        $data = ["id_almacen" => $idalmacen];
        $almacen = new AlmacenModel();
        $respuesta = $almacen->obtenerDatos($data);
        $mov = new ReportesModel();
        $dbmov = $mov->listarpro($idalmacen);

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje,
            "dbProductos" => $dbProductos,
            "dbsecciones" => $dbsecciones,
            "pmovimiento" => $movimiento,
            "pidalmacen" => $idalmacen,
            "datos" => $respuesta,
            "dbmov" => $dbmov,
        ];
        return view('Movimientos/index', $data);
    }

    public function crear()
    {
        $datos = [
            "id_almacen" => $_POST['id_almacen'],
            "id_seccion" => $_POST['id_seccion'],
            "id_producto" => $_POST['id_producto'],
            "cliente" => $_POST['cliente'],
            "cantidad" => $_POST['cantidad'],
            "concepto" => $_POST['concepto'],
            "precio" => $_POST['precio'],
            "fecha" => $_POST['fecha'],
            "movimiento" => $_POST['movimiento'],
        ];

        $movimientos = new MovimientosModel();
        $respuesta = $movimientos->insertar($datos);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Almacenes/' . $_POST['id_almacen'])->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/Almacenes/' . $_POST['id_almacen'])->with('mensaje', '0');
        }
        // if ($respuesta) {
        //     return redirect()->to(base_url() . '/Movimientos')->with('mensaje', '1');
        // } else {
        //     return redirect()->to(base_url() . '/Movimientos')->with('mensaje', '0');
        // }
    }

    public function actualizar()
    {
        $datos = [
            "idAlmacen" => $_POST['idAlmacen'],
            "nombreSeccion" => $_POST['nombreSeccion'],
            "descripcion" => $_POST['descripcion'],
        ];

        $seccion = new MovimientosModel();
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
        $seccion = new MovimientosModel();
        $respuesta = $seccion->obtenerDatos($data);

        $datos = ["datos" => $respuesta];

        return view('Secciones/actualizar', $datos);
    }

    public function eliminar($idSeccion)
    {
        $almacen = new MovimientosModel();
        $data = ["idSeccion" => $idSeccion];

        $respuesta = $almacen->eliminar($data);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Secciones')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/Secciones')->with('mensaje', '5');
        }
    }
}
