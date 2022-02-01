<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBgroup = 'default';
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    //Campos que se pueden manipular
    protected $allowedFields = ['name', 'email'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $validationRules    = [
        'name' => 'required|alpha_numeric_space',
        'email' => 'required|valid_email|is_unique[users.email]',
        
    ];
    protected $validationMessages = [
        'email'=> [
            'valid_email' => 'Email incorrecto intentelo de nuevo',
            'is_unique' => 'El email ingresado ya se encuentra registrado, intente con otro.',
        ],
    ];
    protected $skipValidation = false;

    protected function AgregarInsert(array $data){
        $data['data']['name'] = $data['data']['name']." nuevo";
        return $data;
    }

    protected function AgregarUpdate(array $data){
        $data['data']['name'] = $data['data']['name']." actualizado";
        return $data;
    }
    

    protected $beforeInsert = ['AgregarInsert'];
    protected $beforeUpdate = ['AgregarUpdate'];
}