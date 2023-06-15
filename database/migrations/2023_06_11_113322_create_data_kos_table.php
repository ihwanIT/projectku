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
        Schema::create('data_kos', function (Blueprint $table) {
            $table->id();
            $table->string('namakos');
            $table->integer('jumlahkamar');
            $table->string('fasilitas');
            $table->string('luas_kamar');
            $table->string('jarak');
            $table->integer('harga');
            $table->string('imageA')->nullable();
            $table->string('imageB')->nullable();
            $table->string('imageC')->nullable();
            $table->string('imageD')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kos');
    }
};
