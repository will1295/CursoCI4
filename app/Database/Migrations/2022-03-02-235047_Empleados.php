<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Empleados extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'empleado_id'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'null' => false,
                'auto_increment' => true,
            ],
            'nombres_e'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'apellidos_e'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'telefono' => [
                'type' => 'INT',
                'constraint'  => 8,
                'null' => false,
            ],
            'departamento' => [
                'type' => 'INT',
                'constraint'  => 11,
                'null' => false,
            ],
        ]);
        $this->forge->addPrimaryKey('empleado_id', true);
        $this->forge->addForeignKey('departamento', 'departamento', 'departamento_id');
        $this->forge->createTable('empleados');
    }

    public function down()
    {
        $this->forge->dropTable('empleados');
    }
}
