<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $usuario = $this->request->getPost('username');
        $contrasena = $this->request->getPost('password');

        $model = new LoginModel();
        $user = $model->getUserByUsername($usuario);

        // En tu LoginModel las contraseñas están en claro, comparar directamente.
        if ($user && $contrasena === $user['contrasena']) {
            $sessionData = [
                'id'         => $user['id'],
                'usuario'    => $user['usuario'],
                'rol'        => $user['rol'],
                'cargo'      => $user['cargo'],
                'nombre'     => $user['nombre'],
                'apellido'   => $user['apellido'],
                'cedula'     => $user['cedula'],
                'edad'       => $user['edad'],
                'telefono'   => $user['telefono'],
                'isLoggedIn' => true,
            ];
            session()->set($sessionData);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Credenciales inválidas');
        }
    }

    public function cerrar_sesion()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}