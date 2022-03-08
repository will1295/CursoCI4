<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmpleadoSeed extends Seeder
{
    public function run()
    {
        $data = [
            'nombres_e'    => 'Willian',
            'apellidos_e'    => 'Montes',
            'telefono'    => '123456',
            'departamento'    => 2,
        ];
        // Using Query Builder
        $this->db->table('empleados')->insert($data);
    }
}