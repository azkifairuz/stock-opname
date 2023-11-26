<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devisi extends Model
{
    use HasFactory;
    protected $table = "devisi";
    protected $fillable = [
        'id_devisi', 
        'nm_devisi', 
        'ket_devisi',
    ];
}
