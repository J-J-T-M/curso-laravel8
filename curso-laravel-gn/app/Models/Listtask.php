<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listtask extends Model
{
    use HasFactory;
    protected $fillable = [

        'task',
        'description',
        'created_date',
        'accomplished',//realizado

    ];
}
