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
    protected $dates = [
        'date',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'date' => 'date',
        'attempt_time' => 'datetime',
        'finished' => 'boolean',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];
}
