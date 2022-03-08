<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatedAtUsers extends Migration
{
    public function up()
    {
        $fields = [
            'created_at' => [
                'type'    => 'date',
                'null'    => false,
                'default' => 'CURRENT_TIMESTAMP'],
        ];
        $this->forge->addColumn('usuariosc', $fields);
    }

    public function down()
    {
        //
    }
}
