<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::truncate();
        for($i = 1; $i<=10; $i++){
            User::create([
                'email' => "admin$i@gmail.com",
                'password'=>Hash::make("lacontra$i"),
                'rol_id'=>"1"         
            ]);
        }

        for($a = 1; $a<=4; $a++){
            User::create([
                'email' => "user$a@gmail.com",
                'password'=>Hash::make("lacontra$a"),
                'rol_id'=>"2",
                'name'=>"Usuario Prueba $a"         
            ]);
        }
    }
}
