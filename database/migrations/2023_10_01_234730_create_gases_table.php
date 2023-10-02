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
        Schema::create('gases', function (Blueprint $table) {
            $table->id();
            $table->integer('idgas');
            $table->string('namagas');
            $table->string('jenisgas');
            $table->integer('nilaigas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gases');
    }
};
