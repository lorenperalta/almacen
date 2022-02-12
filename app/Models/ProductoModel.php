<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{

    public function listar()
    {
        $Producto = $this->db->query("SELECT * FROM tb_producto");
        return $Producto->getresult();
    }

    public function insertar($datos)
    {
        $Producto = $this->db->table('tb_producto');
        $Producto->insert($datos);
        return $this->db->insertID();
    }

    public function obtenerDatos($data)
    {
        $Producto = $this->db->table('tb_producto');
        $Producto->where($data);
        return $Producto->get()->getResultArray();
    }

    public function actualizar($data, $id)
    {
        $Producto = $this->db->table('tb_producto');
        $Producto->set($data);
        $Producto->where('id_producto', $id);
        return $Producto->update();
    }

    public function eliminar($data)
    {
        $Producto = $this->db->table('tb_producto');
        $Producto->where($data);
        return $Producto->delete();
    }
}