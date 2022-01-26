<?php

namespace App\Controllers;
use App\Models\UserModel;

class VistasSeparadas extends BaseController
{
    public function index()
    {
        $userModel = new UserModel($db);
        //Metodos de busquedas.
        //$user = $userModel->find([1,2]);
        //$user = $userModel->findAll();
        // $user = $userModel->withDeleted()->findAll();
        //$user = $userModel->onlyDeleted()->findAll();
        //$user = $userModel->where('email','karla@email.com')->findAll();
        //$user = array('user'=>$user);

        //Insercion de datos
        /*
        $data=[
            'name'=>"Mauricio2",
            'email'=>"mauricio@email.com
        ];
        $userModel->insert($data);
        */

        //Actualizacion de datos
        /*
        $data=[
            'name'=>"Manuel",
            'email'=>"manuel@email.com"
        ];
        $userModel->update(8,$data);
        */

        //Actualizacion de registros multiples con el primary key 
        /*$data=[
            'email'=>"algo@email.com"
        ];
        $userModel->update([1,3],$data);*/

        //Actualizacion de registros multiples por cualquier campo en la tabla
        //$userModel->whereIn('name',['Mauricio','Manuel'])->set(['email'=>'nombres@email.com'])->update();

        //Uso del save
        /*
        $data=[
             
            'name'=>"Alexander",
            'email'=>"alexander@email.com"
        ];
        $userModel->save($data);
        */

        
        $data=[
            'id'=>"14",
            'name'=>"Alex",
            'email'=>"alexander@email.com"
        ];
        $userModel->save($data);


        $user = $userModel->withDeleted()->findAll();
        $user = array('user'=>$user);

        //El var dump se utiliza para conocer que es lo que contiene una variable
        //var_dump($user);
        $juntas = view('ejemplo/header').view('ejemplo/body',$user);
        return $juntas;
    }
}
