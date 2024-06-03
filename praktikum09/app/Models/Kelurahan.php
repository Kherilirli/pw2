<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    protected $table = 'Kelurahans';

    protected $fillable = [
        'nama',
        'kecamatan_id',
    ];
    public $timestamps = false;
}
