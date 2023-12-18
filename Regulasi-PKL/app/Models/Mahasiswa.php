<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mhs';
    protected $fillable = ['id_mhs','nim', 'nama', 'kelas','no_hp'];

    public function kelompok()
    {
        return $this->hasMany(Kelompok::class);
    }
}
