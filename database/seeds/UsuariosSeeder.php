<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = \App\Usuario::create([
           'nome' => 'admin',
           'email' => 'admin@admin',
           'senha' => bcrypt('admin'),
        ]);
        $usuario->assignRole('admin');
    }
}
