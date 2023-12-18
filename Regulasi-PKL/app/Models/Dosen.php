<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    protected $fillable = ['id_dosen','nip', 'nama', 'alamat','no_hp'];

    public function kelompok(){
        return $this->hasMany(Kelompok::class);
    }
}
