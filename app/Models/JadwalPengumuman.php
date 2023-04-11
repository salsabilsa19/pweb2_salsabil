<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPengumuman extends Model
{
    use HasFactory;

    protected $table = 'jadwal_pengumuman';

    protected $fillable = [
        'tanggal_tes',
        'tanggal_kelulusan',
    ];
}
