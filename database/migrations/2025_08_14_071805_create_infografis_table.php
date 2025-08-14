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
        Schema::create('infografis', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('total_penduduk')->default(0);
            $table->unsignedInteger('kepala_keluarga')->default(0);
            $table->unsignedInteger('perempuan')->default(0);
            $table->unsignedInteger('laki_laki')->default(0);

            $table->json('rw')->nullable(); // Data per RW
            $table->json('agama')->nullable(); // Data per agama
            $table->json('pendidikan')->nullable(); // Data pendidikan
            $table->json('status_perkawinan')->nullable(); // Status kawin

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
        Schema::dropIfExists('infografis');
    }
};
