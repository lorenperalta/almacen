<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class ProductoController extends BaseController
{

    public function index()
    {
        $almacen = new ProductoModel();
        $datos = $almacen->listar();
        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];
        return view('Producto/index', $data);
    }

    public function crear()
    {
        $datos = [
            "nombreproducto" => $_POST['nombreproducto'],
            "descripcion" => $_POST['descripcion'],
            "unidad" => $_POST['unidad'],
        ];

        $almacen = new ProductoModel();
        $respuesta = $almacen->insertar($datos);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Producto')->with('mensaje', '1');
        } else {
            return redirect()->to(base_url() . '/Producto')->with('mensaje', '0');
        }
    }

    public function actualizar()
    {
        $datos = [
            "nombreproducto" => $_POST['nombreproducto'],
            "descripcion" => $_POST['descripcion'],
            "unidad" => $_POST['unidad'],
        ];

        $almacen = new ProductoModel();
        $idAlmacen = $_POST['id_producto'];
        $respuesta = $almacen->actualizar($datos, $idAlmacen);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Producto')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/Producto')->with('mensaje', '3');
        }
    }

    public function obtener($idAlmacen)
    {
        $data = ["id_producto" => $idAlmacen];
        $almacen = new ProductoModel();
        $respuesta = $almacen->obtenerDatos($data);

        $datos = ["datos" => $respuesta];

        return view('Producto/actualizar', $datos);
    }

    public function eliminar($idAlmacen)
    {
        $almacen = new ProductoModel();
        $data = ["id_producto" => $idAlmacen];

        $respuesta = $almacen->eliminar($data);

        if ($respuesta) {
            return redirect()->to(base_url() . '/Producto')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/Producto')->with('mensaje', '5');
        }
    }
}