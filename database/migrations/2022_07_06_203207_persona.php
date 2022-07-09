<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datospersona', function (Blueprint $table) {
            $table->id();  
            $table->string('nom');
            $table->string('ape');
            $table->string('CI');
            $table->string('dir');
            $table->string('telf');
            $table->boolean('estado');
         //$table->id();          
            //$table->foreign('id_tipo')->references('id')->on('tipos');
          
             $table->foreignId('id_tipo')->constrained('tipos');

            $table->foreignId('id_especialidad')->constrained('especialidad');
            // $table->integer('id_especialidad')->unsigned();    
            
            
           // $table->foreign('id_especialidad')->references('id')->on('especialidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datospersona');
    }
};
