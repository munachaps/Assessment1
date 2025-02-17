<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonials extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'person' ,
        'bio',
        'graphic',
        'comment'
    ];
}
