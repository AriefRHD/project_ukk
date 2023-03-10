<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usersiswa extends Model
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'username', 'password','email'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
