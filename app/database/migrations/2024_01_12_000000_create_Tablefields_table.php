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
        Schema::create('tablefields', function (Blueprint $table) {
            $table->id();
            $table->integer('szam');
            $table->string('nev');
            $table->string('leiras');
            $table->integer('tipus');
            $table->integer('ar');
            $table->integer('tulajdonos_id');
            $table->integer('haz');
            $table->integer('szalloda');
            $table->string('szin');
            $table->string('kep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tablefields');
    }
};
