<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pricing extends Model
{
    use HasFactory;
    protected $guard = 'admin';

    protected $fillable = [
        'menu_title',
        'menu_desc',
        'plan_name',
        'price',
        'desc',
        'feature_title',
        'featureone',
        'featuretwo',
        'featurethree',
        'featurefour',
        'button_name'
    ];
}
