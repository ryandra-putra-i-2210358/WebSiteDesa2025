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
        Schema::create('pertanians', function (Blueprint $table) {
            $table->id();
            $table->string('farm'); // Nama peternakan
            $table->string('pemilik')->nullable();
            $table->string('alamat');
            $table->string('nohp');
            $table->string('jenis_pertanian'); // Sapi, kambing, ayam
            $table->integer('jumlah_pertanian')->nullable();
            $table->string('slug')->unique();
            $table->longText('content'); // Deskripsi
            $table->string('image')->nullable();
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
        Schema::dropIfExists('pertanians');
    }
};
