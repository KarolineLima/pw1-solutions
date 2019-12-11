<?php

use App\Usuario;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new Usuario;
        $usuario->name = 'Luiz Chaves';
        $usuario->email = 'luiz.chaves@ifpb.edu.br';
        $usuario->save();

        $usuario = new Usuario;
        $usuario->name = 'Leandro Almeida';
        $usuario->email = 'leandro.almeida@ifpb.edu.br';
        $usuario->save();
    
    }
}
