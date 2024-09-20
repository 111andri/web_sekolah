<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunLulus extends Model
{
    use HasFactory;

    protected $table = 'tahun_lulus';

    public function siswa() {
        return $this->hasMany(Siswa::class);
    }
}
