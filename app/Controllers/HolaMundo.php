<?php

namespace App\Controllers;

class HolaMundo extends BaseController
{
    public function index()
    {
        $datos['mensaje'] = "Este es un mensaje";
        return view('hola_view', $datos);
    }

    public function subindex()
    {
        $datos['mensaje'] = "Este es un mensaje desde el subindex";
        return view('hola_view', $datos);
    }

}
