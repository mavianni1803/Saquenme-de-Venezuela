<?php 

namespace App\Controllers;
class Sacara extends BaseController {
    public function index() {
        $mensaje = '¿Y si no voy mañana?';
        return view('sacaracatunga', [  'mensaje' => $mensaje  ]);
    }
}