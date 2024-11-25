<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Define the fillable fields to prevent mass-assignment vulnerability
    protected $fillable = ['name', 'email', 'password', 'profile_image'];

    // Additional methods or relationships can be added here
}
