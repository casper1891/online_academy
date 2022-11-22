<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quiz extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'quiz_name',
        'desc',
        'img',
        'que_amount',
        'duration',
        'active',


    ];
}
