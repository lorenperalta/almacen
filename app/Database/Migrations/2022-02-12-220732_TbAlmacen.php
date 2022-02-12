<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbAlmacen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_almacen'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombreDelAlmacen'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_almacen', true);
        $this->forge->createTable('tb_almacen');
    }

    public function down()
    {
        $this->forge->dropTable('tb_almacen');
    }
}