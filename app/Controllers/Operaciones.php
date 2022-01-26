<?php

namespace App\Controllers;

class Operaciones extends BaseController
{
    public function index()
    {
       
        return view('ejemplo/header.php').view('ejemplo/body');
    }
}
