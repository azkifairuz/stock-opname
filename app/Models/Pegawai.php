<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    
    protected $table = "pegawai";
    protected $fillable = [
        'id_pegawai',
        'nip',
        'nm_pegawai',
        'id_devisi',
    ];
}
