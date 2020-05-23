<?php

use App\User;
use App\Plan;
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
        Plan::truncate();

        $users = User::all()->where('rol_id',"=",2);
        foreach ($users as $key => $user ){
            for($i = 1; $i<= 1; $i++) {
                Plan::create([
                    'id_user' => $user->id,
                    'nombre' => "Plan $user->id",
                    'imagen' => "https://i.ytimg.com/vi/LLu1BLPKNOQ/maxresdefault.jpg",
                    'aprobado' => 'si',
                ]);
            }
        }

    }
}