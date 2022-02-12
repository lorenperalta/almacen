<?php

namespace App\Models;

use CodeIgniter\Model;

class SeccionesModel extends Model
{

    public function listar()
    {
        $seccion = $this->db->query("SELECT * FROM tb_secciones");
        return $seccion->getresult();
    }

    public function ListarById($id)
    {
        $seccion = $this->db->query("SELECT * FROM tb_secciones WHERE idSeccion = $id");
        return $seccion->getresult();
    }

    public function insertar($datos)
    {
        $seccion = $this->db->table('tb_secciones');
        $seccion->insert($datos);
        return $this->db->insertID();
    }

    public function obtenerDatos($data)
    {
        $seccion = $this->db->table('tb_secciones');
        $seccion->where($data);
        return $seccion->get()->getResultArray();
    }

    public function actualizar($data, $id)
    {
        $seccion = $this->db->table('tb_secciones');
        $seccion->set($data);
        $seccion->where('idSeccion', $id);
        return $seccion->update();
    }

    public function eliminar($data)
    {
        $seccion = $this->db->table('tb_secciones');
        $seccion->where($data);
        return $seccion->delete();
    }
}