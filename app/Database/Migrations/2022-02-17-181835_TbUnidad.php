<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbUnidad extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id-unidad'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombreunidad'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id-unidad', true);
        $this->forge->createTable('tb_unidad');
    }

    public function down()
    {
        $this->forge->dropTable('tb_unidad');
    }
}
