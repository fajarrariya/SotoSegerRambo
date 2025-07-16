<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lauks', function (Blueprint $table) {
            $table->id();
            $table->string('gambar'); // untuk nama file gambar
            $table->string('nama_lauk'); // nama lauk
            $table->decimal('harga', 10, 2); // harga dengan 2 desimal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lauks');
    }
};
