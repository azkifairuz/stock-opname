<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;
    protected $table = "sparepart";
    protected $fillable = [
        'id_sparepart',
        'kd_sparepart',
        'part_number',
        'nm_sparepart',
        'ket_sparepart',
        'id_rak',
        'image',
        'specifikasi',
        'id_vendor',
    ];
}
