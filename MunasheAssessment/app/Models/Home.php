<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Home extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'upper_section',
        'heading',
        'banner_image',
        'description',
        'banner_image_url',
    ];
}
