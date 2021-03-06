<?php

use App\User;
use App\Rutina;
use Illuminate\Database\Seeder;

class RutinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rutina::truncate();

        $users = User::all()->where('rol_id',"=",2);
        foreach ($users as $key => $user ){
            for($i = 1; $i<= 1; $i++) {
                Rutina::create([
                    'id_user' => $user->id,
                    'nombre' => "Rutina $user->id",
                    'imagen' => "https://i.ytimg.com/vi/LLu1BLPKNOQ/maxresdefault.jpg",
                    'aprobado' => 'no',
                ]);
            }
        }

    }
}
