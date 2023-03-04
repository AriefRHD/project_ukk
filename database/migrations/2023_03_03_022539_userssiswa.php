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
        Schema::create('userssiswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nisn')->references('nisn')->on('siswa')->onDelete('cascade');
            $table->string('name',35);
            $table->string('username')->unique();
            $table->string('password');
            $table->string('telp',13);         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userssiswa');
    }
};
