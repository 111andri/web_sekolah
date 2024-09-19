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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru');
            $table->string('nip_guru');
            $table->unsignedBigInteger('jenis_kelamin_id');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('foto_guru');
            $table->unsignedBigInteger('jabatan_id');
            $table->timestamps();

            $table->foreign('jabatan_id')->references('id')->on('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
