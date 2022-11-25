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
        Schema::create('pegunungan', function (Blueprint $table) {
            $table->id('id_gunung');
            $table->string('nama_gunung');
            $table->string('letak_gunung');
            $table->string('ketinggian_gunung');
            $table->string('jenis_gunung');
            $table->string('foto_gunung');
            $table->longText('deskripsi');
            $table->longText('jalur_pendakian');
            $table->string('level_pendakian');
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
        Schema::dropIfExists('pegunungan');
    }
};
