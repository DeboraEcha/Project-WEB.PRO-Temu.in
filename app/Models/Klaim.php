<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klaim extends Model
{
    use HasFactory;
    protected $table = 'klaim';
    protected $primaryKey = 'id_klaim';
    protected $fillable = [
        'id_laporan',
        'nama_pengklaim',
        'no_hp_pengklaim',
        'bukti_klaim',
        'status'
    ];
}
