<?php

namespace App\Models;

use CodeIgniter\Model;

class UnidadModel extends Model
{

    public function listar()
    {
        $almacen = $this->db->query("SELECT * FROM tb_unidad");
        return $almacen->getresult();
    }

    public function insertar($datos)
    {
        $almacen = $this->db->table('tb_unidad');
        $almacen->insert($datos);
        return $this->db->insertID();
    }

    public function obtenerDatos($data)
    {
        $almacen = $this->db->table('tb_unidad');
        $almacen->where($data);
        return $almacen->get()->getResultArray();
    }

    public function actualizar($data, $id)
    {
        $almacen = $this->db->table('tb_unidad');
        $almacen->set($data);
        $almacen->where('id_unidad', $id);
        return $almacen->update();
    }

    public function eliminar($data)
    {
        $almacen = $this->db->table('tb_unidad');
        $almacen->where($data);
        return $almacen->delete();
    }
}