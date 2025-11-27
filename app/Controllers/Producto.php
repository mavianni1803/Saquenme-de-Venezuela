<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use CodeIgniter\Controller;

class Producto extends Controller
{
    public function index()
    {
        $model = new ProductoModel();
        $data['productos'] = $model->findAll();
        return view('productos/index', $data);
    }

    public function create()
    {
        return view('productos/create');
    }

    public function store()
    {
        $model = new ProductoModel();

        $data = [
            'nombre'      => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
        ];

        // Simple validation
        if (empty($data['nombre']) || empty($data['descripcion'])) {
            return redirect()->back()->withInput()->with('errors', 'Todos los campos son requeridos.');
        }

        $model->save($data);

        return redirect()->to('/productos');
    }
}