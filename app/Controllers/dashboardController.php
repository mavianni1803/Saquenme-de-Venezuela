<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class dashboardController extends BaseController
{
    public function index () {
     $data = [
            'nombre' => session()->get('nombre'),
            'apellido' => session()->get('apellido'),
            'cedula' => session()->get('cedula'),
            'edad' => session()->get('edad'),
            'telefono' => session()->get('telefono'),
            'rol' => session()->get('rol'), 
        ];
        return view ('dashboard', $data);
    }
}