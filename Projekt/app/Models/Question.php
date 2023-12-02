<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = 'date';

    protected $fillable = [
        'date',
        'solution_id',
        'first_attempt',
        'second_attempt',
        'third_attempt',
        'fourth_attempt',
        'fifth_attempt',
        'missed',
        'total_time'
    ];
    protected $dates = [
        'date',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'date' => 'date',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];
}
