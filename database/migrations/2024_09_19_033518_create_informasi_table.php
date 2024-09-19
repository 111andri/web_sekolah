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
        Schema::create('informasi', function (Blueprint $table) {
            $table->id();
            $table->string('judul_informasi');
            $table->text('des_informasi');
            $table->string('foto_informasi');
            $table->unsignedBigInteger('kaetgori_informasi_id');
            $table->timestamps();

            $table->foreign('kaetgori_informasi_id')->references('id')->on('kategori_informasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasis');
    }
};
