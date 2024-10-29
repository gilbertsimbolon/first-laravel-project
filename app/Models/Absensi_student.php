<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi_student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisn',
        'date',
        'status',
        'note',
        'qr_code',
        'time_in',
        'time_out',
    ];
}
