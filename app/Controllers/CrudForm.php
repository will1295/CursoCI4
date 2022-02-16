<?php

namespace App\Controllers;
use App\Models\UserModel;

class CrudForm extends BaseController
{

    public function __construct(){
        helper('form');
    }


    public function index()
    {
        $userModel = new UserModel($db);
        $datos = $userModel->paginate(5); 
        $paginador = $userModel->pager;
        //$paginador->setPath();
        $datos = array('user'=>$datos,'paginador'=>$paginador,'cabecera'=>view('ejemplo/header'));
       // $juntas = view('ejemplo/header').view('ejemplo/indexcrud',$user);
       $juntas = view('ejemplo/indexcrud',$datos);
        return $juntas;

       
    }

    public function formulario(){
        
        $juntas = view('ejemplo/header').view('ejemplo/formulario');
        return $juntas;
    }

    public function Guardar(){
        $userModel = new UserModel($db);
        $request = \Config\Services::request();
        $datos = array(
            'name'=>$request->getPost('nombre'),
            'email'=>$request->getPost('email')
        );
        if($request->getPost('id')){
            $datos['id']=$request->getPost('id');
        }
        
        if($userModel->save($datos)===false){
            var_dump($userModel->errors());
        }
        //var_dump($datos);
        $userModel->save($datos);
        $user = $userModel->findAll();
        $user = array('user'=>$user);
        $juntas = view('ejemplo/header').view('ejemplo/indexcrud',$user);
        return $juntas;
    }

    public function Buscar(){
        //Llamando base de datos
        $userModel = new UserModel($db);
        //Por medio del request se extrae la informacion
        $request = \Config\Services::request();
        if($request->getPost('buscar')){
            //Variable buscar contiene la informacion del input 'buscar'
            $busqueda = $request->getPost('buscar');
            //Consulta para encontrar valores parecidos al input
            $usuario = $userModel->asArray()->like('name',$busqueda)->findAll();
            $email = $userModel->asArray()->like('email',$busqueda)->findAll(); 
            //Combinar ambos array para la busqueda
            $user= array_merge($usuario,$email);
            $user = array('user'=>$user);
            //Cargar la vista respectiva
           $juntas = view('ejemplo/header').view('ejemplo/indexcrud',$user);
           return $juntas;
        }
        //Retorno sino encuentra algo
            else{
                $user = $userModel->asArray()->findAll(); 
                $user = array('user'=>$user);
                $juntas = view('ejemplo/header').view('ejemplo/indexcrud',$user);
                return $juntas;
            }

        

    }

    public function Editar(){
        $userModel = new UserModel($db);
        $request = \Config\Services::request();
        if($request->getPostGet('id')){
               //Por metodo post del form
            $id = $request->getPostGet('id');
        }
        else {
                    //Por segmento de url
          $id = $request->uri->getSegment(3);
            
        }
        $user = $userModel->find([$id]);
        $user = array('user'=>$user);
        //var_dump($user);
        $juntas = view('ejemplo/header').view('ejemplo/formulario',$user);
        return $juntas;
    }

    public function Borrar(){
        $userModel = new UserModel($db);
        $request = \Config\Services::request();
        $id = $request->getPostGet('id');
        $userModel->delete([$id]);
        $user = $userModel->findAll();
        $user = array('user'=>$user);
        //var_dump($user);
        $juntas = view('ejemplo/header').view('ejemplo/indexcrud',$user);
        return $juntas;

    }


}
