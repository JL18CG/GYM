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
        for($i = 1; $i<=20; $i++){
            User::create([
                'email' => "Usuario$i@gmail.com",
                'password'=>Hash::make("lacontra$i"),
                'rol_id'=>"1"         
            ]);
        }
        User::create([
            
        ]);       
    }
}
