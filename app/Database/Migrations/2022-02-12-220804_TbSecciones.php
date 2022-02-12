<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbSecciones extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idSeccion'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'idAlmacen'       => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'nombreSeccion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('idSeccion', true);
        $this->forge->createTable('tb_secciones');
    }

    public function down()
    {
        $this->forge->dropTable('tb_secciones');
    }
}