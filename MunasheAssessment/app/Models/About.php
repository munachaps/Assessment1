<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
       'title',
        'heading',
        'description',
        'itemone',
        'itemtwo',
        'itemthree',
        'itemfour',
        'itemfive',
        'itemsix',
        'leader_name',
        'leader_title',
        'leader_profile',
        'call_description',
        'phone_number'
    ];
}

