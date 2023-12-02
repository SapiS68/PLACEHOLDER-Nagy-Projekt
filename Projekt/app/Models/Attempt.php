<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attempt extends Model
{
    use HasFactory;

    protected $primaryKey = 'date';

    protected $fillable = [
        'date',
        'username',
        'attempt_number',
        'attempt_time',
        'finished'
    ];
}
