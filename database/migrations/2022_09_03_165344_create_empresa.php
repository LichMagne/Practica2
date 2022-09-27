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
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empresa_name');
            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('ciudad_id');
            $table->timestamps();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->foreign('pais_id')
            ->references('id')->on('paises')->onDelete('cascade');
            $table->foreign('ciudad_id')
            ->references('id')->on('ciudades')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
};
