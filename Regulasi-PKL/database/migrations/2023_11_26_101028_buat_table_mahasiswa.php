<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('mahasiswa', function(Blueprint $table){
            $table->id('id_mhs');
            $table->unsignedBigInteger('id_user');
            $table->string('nim');
            $table->string('nama');
            $table->string('kelas');
            $table->string('tempat_pkl')->nullable(); // Set to nullable
            $table->unsignedBigInteger('id_dosen')->nullable(); // Set to nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
