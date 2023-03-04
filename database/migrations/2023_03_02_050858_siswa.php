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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->string('nisn', 10);
            $table->string('nis', 8);
            $table->string('nama', 35);
            $table->foreignId('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade');
            $table->text('alamat');
            $table->string('no_telp', 14);
            $table->foreignId('id_spp')->references('id_spp')->on('spp')->onDelete('cascade');
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
        Schema::dropIfExists('siswa');
    }
};
