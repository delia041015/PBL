<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kelompok extends Model
{
    use HasFactory;
    protected $table = 'kelompok';
    protected $primaryKey = 'id_kelompok';
    protected $fillable = ['id_kelompok', 'nama_kelompok', 'ketua_id','anggota1_id','anggota2_id','instansi_id','dosen_id'];

    public function ketua(){
        return $this->belongsTo(Mahasiswa::class,'ketua_id');
    }
    public function anggota1()
    {
        return $this->belongsTo(Mahasiswa::class, 'anggota1_id');
    }
    public function anggota2()
    {
        return $this->belongsTo(Mahasiswa::class, 'anggota2_id');
    }

    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'instansi_id');
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
