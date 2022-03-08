<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeed extends Seeder
{
    public function run()
    {

        $password = password_hash("contra12", PASSWORD_DEFAULT);

        $data = [
            'nombre_u'    => 'Will',
            'email'    => 'email@email.com',
            'pass'    => $password,
            'empleado'    => 2,
        ];
        // Using Query Builder
        $this->db->table('usuariosc')->insert($data);
    }
}