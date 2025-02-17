<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Works extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'work_done' ,
        'value',
    ];
}
