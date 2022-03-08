<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DepartamentoSeed extends Seeder
{
    public function run()
    {
        $data = [
            'nombre_d'    => 'Usulutan',
        ];
        // Using Query Builder
        $this->db->table('departamento')->insert($data);
    }
}