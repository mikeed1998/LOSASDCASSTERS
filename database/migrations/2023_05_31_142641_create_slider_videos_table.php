<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('link')->nullable();
            $table->text('archivo')->nullable();
            $table->text('aux')->nullable();
            $table->tinyInteger('tipo')->nullable();
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
        Schema::dropIfExists('slider_videos');
    }
}
