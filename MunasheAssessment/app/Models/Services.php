<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'title',
        'service_desc',
        'serviceone',
        'servicetwo',
        'servicethree',
        'servicefour',
        'button_name'
    ];
}
