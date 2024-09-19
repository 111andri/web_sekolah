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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jurusan_id');
            $table->unsignedBigInteger('angkatan_id');
            $table->unsignedBigInteger('jenis_kelamin_id');
            $table->unsignedBigInteger('agama_id');
            $table->unsignedBigInteger('tahun_lulus_id');
            $table->string('nama_siswa');
            $table->string('nisn');
            $table->string('alamat');
            $table->string('tgl_lahir');
            $table->string('no_hp');
            $table->string('foto_siswa');
            $table->timestamps();

            $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('cascade');
            $table->foreign('angkatan_id')->references('id')->on('angkatan')->onDelete('cascade');
            $table->foreign('jenis_kelamin_id')->references('id')->on('jenis_kelamin')->onDelete('cascade');
            $table->foreign('agama_id')->references('id')->on('agama')->onDelete('cascade');
            $table->foreign('tahun_lulus_id')->references('id')->on('tahun_lulus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
