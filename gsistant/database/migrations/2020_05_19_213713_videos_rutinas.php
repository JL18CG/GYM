<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VideosRutinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos_rutinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rutina')->constrained('rutinas')->onDelete('cascade');
            $table->string('nombre');
            $table->foreignId('id_rutina')->constrained('rutinas')->onDelete('cascade');
            $table->string('url');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
