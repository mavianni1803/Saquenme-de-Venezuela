<?php
/*desea hacer un modulo de login en el cual los usuarios con roles (Admin, secretaria y obrero) al loguear este 
muestre los datos de dicho usuario (cargo, rol) y los datos personales (Nombre, apellido, cédula, edad y teléfono), 
recuerde que NO se debe usar una base de datos.*/

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    private $users = [
        [
            'id' => 1,
            'usuario' => 'admin',
            'contrasena' => 'admin123',
            'rol' => 'Admin',
            'cargo' => 'Administrador',
            'nombre' => 'Ying',
            'apellido' => 'Wei',
            'cedula' => '22132445',
            'edad' => 45,
            'telefono' => '0422-5978869'
        ],
        [
            'id' => 2,
            'usuario' => 'secretaria',
            'contrasena' => 'sec123',
            'rol' => 'Secretaria',
            'cargo' => 'Asistente Administrativo',
            'nombre' => 'Wen',
            'apellido' => 'Ling',
            'cedula' => '87654321',
            'edad' => 30,
            'telefono' => '0426-9831145'
        ],
        [
            'id' => 3,
            'usuario' => 'obrero',
            'contrasena' => 'obr123',
            'rol' => 'Obrero',
            'cargo' => 'Trabajador',
            'nombre' => 'Yu',
            'apellido' => 'Yin',
            'cedula' => '40019468',
            'edad' => 28,
            'telefono' => '0416-8542938' 
        ]
    ];

    public function getUserByUsername(string $username)
    {
        foreach ($this->users as $user) {
            // el array usa 'usuario' como clave
            if ($user['usuario'] === $username) {
                return $user;
            }
        }

        return null;
    }
}