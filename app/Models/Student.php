<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;

    // protected $table = 'Student';

    protected $fillable = [
        'nisn',
        'name',
        'class',
        'phone',
        'email',
        'gender',
        'place_born',
        'date_born',
        'address',
        'foto',
    ];
}
