<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $table = "vendor";
    protected $fillable = [
        'id_vendor', 
        'nm_vendor', 
        'no_telp',
        'email',
        'alamat',
    ];
}
