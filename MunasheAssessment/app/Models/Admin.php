<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class Admin extends Authenticatable
{
    use  HasFactory, Notifiable;

    protected $table = 'admin';
    protected $guard = 'admin';

    protected $fillable = [
        'username',
        'email',
        'dob',
        'password',
    ];

}
