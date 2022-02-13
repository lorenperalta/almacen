<?php

namespace App\Models;

use CodeIgniter\Model;

class MovimientosModel extends Model
{

    public function listar()
    {
        $seccion = $this->db->query("SELECT * FROM tb_movimientos");
        return $seccion->getresult();
    }

    public function ListarById($id)
    {
        $seccion = $this->db->query("SELECT * FROM tb_movimientos WHERE id_movimiento = $id");
        return $seccion->getresult();
    }

    public function insertar($datos)
    {
        $seccion = $this->db->table('tb_movimientos');
        $seccion->insert($datos);
        return $this->db->insertID();
    }

    public function obtenerDatos($data)
    {
        $seccion = $this->db->table('tb_movimientos');
        $seccion->where($data);
        return $seccion->get()->getResultArray();
    }

    public function actualizar($data, $id)
    {
        $seccion = $this->db->table('tb_movimientos');
        $seccion->set($data);
        $seccion->where('id_movimiento', $id);
        return $seccion->update();
    }

    public function eliminar($data)
    {
        $seccion = $this->db->table('tb_movimientos');
        $seccion->where($data);
        return $seccion->delete();
    }
}