<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Models\HasFactory;

class Pengguna extends Authenticatable
{
    use Notifiable;

    protected $table = "pengguna";
    protected $primaryKey = "id";
    protected $fillable = [
        'name','level','email','password',
    ];

   
    protected $hidden = [
        'password','remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
   
}
