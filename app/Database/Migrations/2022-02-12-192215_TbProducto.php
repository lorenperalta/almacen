<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbProducto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_producto'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombreproducto'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_producto', true);
        $this->forge->createTable('tb_producto');
    }

    public function down()
    {
        $this->forge->dropTable('tb_producto');
    }
}
