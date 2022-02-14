<?php

namespace App\Models;

use CodeIgniter\Model;

class ReportesModel extends Model
{
    public function listarpro($idalmacen)
    {
        $seccion = $this->db->query("SELECT *, SUM(CASE WHEN tb_movimientos.movimiento='ingreso' THEN tb_movimientos.cantidad ELSE 0 END) - SUM(CASE WHEN tb_movimientos.movimiento='egreso' THEN tb_movimientos.cantidad ELSE 0 END)AS total FROM `tb_movimientos` inner join tb_producto on tb_producto.id_producto=tb_movimientos.id_producto where tb_movimientos.id_almacen=$idalmacen GROUP BY tb_movimientos.id_producto; ");
        return $seccion->getresult();
    }
}