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

        User::create([
            'email' => "admin@gmail.com",
            'password'=>Hash::make("a12345678b"),
            'rol_id'=>"1"
        ]);

       
    }
}
