<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;
    protected $table = 'instansi';
    protected $primaryKey = 'id_instansi';
    protected $fillable = ['id_instansi', 'nama', 'alamat'];

    public function kelompok(){
        return $this->hasMany(Kelompok::class);
    }
}
