<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Features extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'menu_title' ,
        'menu_heading',
        'content_heading',
        'description',
         'content_description',
         'toggleone',
         'toggleone_desc',
         'toggletwo',
         'toggletwo_desc',
         'togglethree' ,
         'togglethree_desc',
         'feature_graphic',
         'cardone',
         'cardtwo',
         'cardthree',
         'cardfour',
         'cardone_desc',
         'cardtwo_desc',
         'cardthree_desc',
         'cardfour_desc',
    ];
}


