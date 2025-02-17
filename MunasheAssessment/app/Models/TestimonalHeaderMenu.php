<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestimonalHeaderMenu extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'menu_title',
        'menu_heading',
    ];
}
