<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class settings extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'email',
        'phone_num',
        'address',
        'con_img',
        'con_links',


    ];
}
