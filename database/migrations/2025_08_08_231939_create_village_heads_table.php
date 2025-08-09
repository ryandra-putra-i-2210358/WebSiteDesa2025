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
        Schema::create('village_heads', function (Blueprint $table) {
            $table->id();
            $table->string('name');              // Nama kepala desa
            $table->string('position'); // Jabatan
            $table->string('image')->nullable(); // Path foto kepala desa
            $table->string('image_signature')->nullable(); // Path tanda tangan
            $table->text('welcome_text')->nullable(); // Sambutan
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
        Schema::dropIfExists('village_heads');
    }
};
