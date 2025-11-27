<?php

namespace App\Controllers;

use App\Models\FormularioModel;
use App\Controllers\BaseController;

class FormularioController extends BaseController
{
    public function index()
    {
        // El archivo de vista existente se llama 'formularios.php'
        return view('formularios');
    }

    public function login()
    {   
        $model = new FormularioModel();
        $session = session();

        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');

        $user = $model->getUser($usuario);
        if ($user && password_verify($contrasena, $user['contrasena'])) {
            $session->set([
                'usuario' => $user['usuario'],
                'isLoggedIn' => true
            ]);
            return redirect()->to('/tablero');
        } else {
            $session->setFlashdata('msg', 'Usuario o contraseña incorrectos');
            return redirect()->to('/formulario');
        }
    }


    public function tablero()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/formulario');
        }

        $data['usuario'] = $session->get('usuario');
        return view('tableros', $data);

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/formulario');
    }
}

