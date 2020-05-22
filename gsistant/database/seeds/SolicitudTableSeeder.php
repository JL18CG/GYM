<?php

use App\User;
use App\Rutina;
use App\Solicitude;
use Illuminate\Database\Seeder;

class SolicitudTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Solicitude::truncate();
        $rutinas = Rutina::all();

        foreach ($rutinas as $key => $rutina ){
            for($i = 1; $i<= 1; $i++) {

                Solicitude::create([
                    'id_user' => $rutina->id_user,
                    'titulo' => "Solicitud del Usuario $rutina->id_user",
                    'descripcion' => "Texto de la solicitud de prueba del usuario $rutina->id_user",
                    'id_rutina' => $rutina->id,
                ]);
                
            }
        }




    }
}