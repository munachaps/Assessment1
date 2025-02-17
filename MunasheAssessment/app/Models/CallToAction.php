<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CallToAction extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'title',
        'description',
        'button_message'
    ];
}

