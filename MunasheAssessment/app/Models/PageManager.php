<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PageManager extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'heading',
        'banner_image',
        'description',
        'banner_image_url',
    ];
}
