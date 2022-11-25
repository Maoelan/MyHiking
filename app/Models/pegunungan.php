<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegunungan extends Model
{
    use HasFactory;

    protected $table = "pegunungan";
    protected $primaryKey = 'id_gunung';
    protected $fillable = [
        'nama_gunung',
        'letak_gunung',
        'ketinggian_gunung',
        'jenis_gunung',
        'foto_gunung',
        'deskripsi',
        'jalur_pendakian',
        'level_pendakian',
    ];

    protected $hidden;
}
