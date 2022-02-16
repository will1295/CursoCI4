<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function __construct(){
        helper('form');
    }

    public function index()
    {
        return view('welcome_message');
    }

    public function ejemplo()
    {
        helper('form');

    }
}
