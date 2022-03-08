<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersC extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'usersc_id'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'null' => false,
                'auto_increment' => true,
            ],
            'nombre_u'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'null' => false,
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'pass' => [
                'type' => 'VARCHAR',
                'constraint'  => '100',
                'null' => false,
            ],
            'empleado' => [
                'type' => 'INT',
                'constraint'  => 11,
                'null' => false,
            ],
         
        ]);
        $this->forge->addPrimaryKey('usersc_id', true);
        $this->forge->addForeignKey('empleado', 'empleados', 'empleado_id');
        $this->forge->createTable('usuariosc');
    }

    public function down()
    {
        $this->forge->dropTable('usuariosc');
    }
    

}
