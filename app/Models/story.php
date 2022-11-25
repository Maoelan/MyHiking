<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class story extends Model
{
    use HasFactory;

    protected $table = "story";
    protected $primaryKey = 'id_story';
    protected $fillable = [
        'judul_story',
        'nama',
        'tanggal_post',
        'foto_story',
        'post_story',
    ];

    protected $hidden;
}
