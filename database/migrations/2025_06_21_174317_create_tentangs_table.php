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
        Schema::create('tentangs', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->string('sub-hed1');
            $table->string('desc-sub-head1');
            $table->string('sub-hed2');
            $table->string('desc-sub-head2');
            $table->string('sub-hed3');
            $table->string('desc-sub-head3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentangs');
    }
};
