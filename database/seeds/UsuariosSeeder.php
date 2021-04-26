<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Andres Bueno',
            'email' => 'andresbuenoal95@gmail.com',
            'password' => Hash::make('andres123'),
            'url' => 'andres.com'
            
        ]);
        //$user->perfil()->create();

        $user2 = User::create([
            'name' => 'Jacqueline Sanchez',
            'email' => 'jaqui@mail.com',
            'password' => Hash::make('andres123'),
            'url' => 'andres.com'
            
        ]);
        //$user2->perfil()->create(); 
    }
}
