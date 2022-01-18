<?php

namespace App\Controllers;

class HolaMundo extends BaseController
{
    public function index()
    {
        $datos['mensaje'] = "Este es un mensaje";
        return view('hola_view', $datos);
    }
}
