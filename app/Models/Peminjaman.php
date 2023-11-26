<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjaman";
    protected $fillable = [
        'id_peminjaman',
        'id_pegawai',
        'id_sparepart',
        'tgl_peminjaman',
        'qty',
        'id_mesin',
        'status'
    ];
}
