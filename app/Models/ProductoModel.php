<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table         = 'productos';
    protected $primaryKey    = 'id';
    // permitir precio y desactivar timestamps si la tabla no los tiene
    protected $allowedFields = ['nombre', 'descripcion', 'precio'];
    protected $useTimestamps = false;
    // si tu tabla tiene created_at/updated_at cambia $useTimestamps a true y añade los campos en la BD
    // Dates
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}