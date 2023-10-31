<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Signup extends Authenticatable
{
    protected $table = 'user_login';
    protected $fillable = [
        "full_name",
        "email_address",
        "user_tel",
        "password"
    ];
}
