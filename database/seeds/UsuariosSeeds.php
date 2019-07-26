<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosSeeds extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if (User::where('email', '=', 'email@email.com')->count()) {

            $usuario = User::where('email', '=', 'email@email.com')->first();
            
            $usuario->name = "Jaqueline de Lima";
            $usuario->email = "email@email.com";
            $usuario->password = bcrypt('123');
            $usuario->save();
                        
        } else {

            $usuario = new User();
            $usuario->name = "Jaqueline de Lima";
            $usuario->email = "email@email.com";
            $usuario->password = bcrypt('123');
            $usuario->save();
        }
    }

}
