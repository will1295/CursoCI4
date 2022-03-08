<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Departamentos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'departamento_id'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'null' => false,
                'auto_increment' => true,
            ],
            'nombre_d'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
        ]);
        $this->forge->addPrimaryKey('departamento_id', true);
        $this->forge->createTable('departamento');
    }

    public function down()
    {
        $this->forge->dropTable('departamento');
    }
}
