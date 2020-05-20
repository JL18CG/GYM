<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VideosPlanesAlimenticios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos_planes_alimenticios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('id_plan_alimenticio')->constrained('planes_alimenticios');
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
