<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('vettore', 20);
            $table->smallInteger('treno');
            $table->string('partenza', 50);
            $table->string('destinazione', 50);
            $table->string('orario', 6);
            $table->smallInteger('binario');
            $table->string('informazioni', 50);
            $table->string('ritardo', 6);
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
        Schema::dropIfExists('trains');
    }
}
