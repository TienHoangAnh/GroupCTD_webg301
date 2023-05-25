<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class healthcheck extends Model
{

    use HasFactory;
    protected $table = 'healthchecks';
    protected $fillable = [
        'name',
        'birth',
        'gender',
        'id',
        'address',
        'height',
        'weight',
        'medicialHistory',
        'medicialSchedule'
    ];
}
