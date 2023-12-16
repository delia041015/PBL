<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;
    protected $table = 'kelompok';
    protected $primaryKey = 'id_kelompok';
    protected $fillable = ['id_kelompok', 'nama_kelompok', 'ketua','anggota1','anggota2','instansi','dosen'];
}
