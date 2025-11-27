<?php

namespace App\Models;

use CodeIgniter\Model;

class FormularioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['usuario', 'contrasena'];
    protected $useTimestamps = false;

    /**
     * Devuelve el registro del usuario por su nombre de usuario.
     * Retorna un array o null.
     */
    public function getUser(string $usuario)
    {
        return $this->where('usuario', $usuario)->first();
    }
}
