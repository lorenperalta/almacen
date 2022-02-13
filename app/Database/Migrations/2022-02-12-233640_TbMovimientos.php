<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbMovimientos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_movimiento'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_almacen'       => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'id_seccion'       => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'id_producto'       => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'cliente'       => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cantidad'       => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'unidad'       => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'concepto'       => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'precio' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'fecha' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'movimiento' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_movimiento', true);
        $this->forge->createTable('tb_movimientos');
    }

    public function down()
    {
        $this->forge->dropTable('tb_secciones');
    }
}