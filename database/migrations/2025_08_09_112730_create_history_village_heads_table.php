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
        Schema::create('history_village_heads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->year('start_year');
            $table->string('end_year')->nullable(); // bisa "Sekarang"
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
        Schema::dropIfExists('history_village_heads');
    }
};
