<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparepartMesin extends Model
{
    use HasFactory;
    protected $table = "sparepart_mesin";
    protected $fillable = [
        'id_sparepart_mesin', 
        'id_mesin', 
        'id_sparepart',
        'qty',
    ];
}
