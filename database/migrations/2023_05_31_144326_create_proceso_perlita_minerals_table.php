<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesoPerlitaMineralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso_perlita_minerals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero')->nullable();
            $table->string('nombre')->nullable();
            $table->text('foto')->nullable();
            $table->text('aux')->nullable();
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
        Schema::dropIfExists('proceso_perlita_minerals');
    }
}
