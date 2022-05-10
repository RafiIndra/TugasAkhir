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
        Schema::create('motor_dipinjams', function (Blueprint $table) {
            $table->increments('No_Polisi');
            $table->string('Merk');
            $table->string('Jenis');
            $table->string('Tipe');
            $table->double('harga_Per_Hari');
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
        Schema::dropIfExists('motor_dipinjams');
    }
};
