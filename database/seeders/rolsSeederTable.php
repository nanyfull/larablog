<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class rolsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = Rol::create([
            'key'=>'admin',
            'name' => 'Rol administrador',
            'description' =>'Tiene acceso a todos los modulos del sistema'
        ]);

        $rol2 = Rol::create([
            'key'=>'invitado',
            'name' => 'Rol invitado',
            'description' =>'Tiene algunos permisos en el sistema'
        ]);
    }
}
