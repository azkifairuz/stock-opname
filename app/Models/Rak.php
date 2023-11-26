<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;
    protected $table = "rak";
    protected $fillable = [
        'id_rak ', 
        'kd_rak', 
        'nm_rak',
        'ket_rak',
    ];
}
