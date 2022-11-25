<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    use HasFactory;

    protected $table = "info";
    protected $primaryKey = 'id_info';
    protected $fillable = [
        'pertanyaan',
        'jawaban',
    ];

    protected $hidden;
}
