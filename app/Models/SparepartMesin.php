<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparepartMesin extends Model
{
    use HasFactory;
    protected $table = "mesin";
    protected $fillable = [
        'id_mesin', 
        'nm_mesin', 
        'specifikasi',
        'ket_mesin',
    ];
}
