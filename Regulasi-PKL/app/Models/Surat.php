<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Surat extends Model
{
    use HasFactory;

    protected $table = 'surats';
    protected $primaryKey = 'id_surat';
    protected $fillable = ['id_surat','nama_surat'];
}
