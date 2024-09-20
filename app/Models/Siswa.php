<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "siswa";

    protected $fillable = [
        "jurusan_id",
        "angkatan_id",
        "jenis_kelamin_id",
        "agama_id",
        "tahun_lulus_id",
        "nama_siswa",
        "nisn",
        "alamat",
        "tgl_lahir",
        "no_hp",
        "foto_siswa",
    ];

    public function angkatan() {
        return $this->belongsTo(Angkatan::class);
    }

    public function jurusan() {
        return $this->belongsTo(Jurusan::class);
    }

    public function jenisKelamin() {
        return $this->belongsTo(JenisKelamin::class);
    }
    
    public function tahunLulu() {
        return $this->belongsTo(TahunLulus::class);
    }

}
