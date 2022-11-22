<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Details_Relation extends Model
{

    use HasFactory,SoftDeletes;


    protected $table='details_relations';
    protected $fillable = [
        'score',
        'stu_duration',


    ];
}
