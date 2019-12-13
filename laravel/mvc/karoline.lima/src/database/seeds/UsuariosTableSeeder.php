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
        $usuarios = new Usuario;
        $usuarios->name = 'Luiz Chaves';
        $usuarios->email = 'luiz.chaves@ifpb.edu.br';
        $usuarios->save();

        $usuarios = new Usuario;
        $usuarios->name = 'Leandro Almeida';
        $usuarios->email = 'leandro.almeida@ifpb.edu.br';
        $usuarios->save();
    }
}
