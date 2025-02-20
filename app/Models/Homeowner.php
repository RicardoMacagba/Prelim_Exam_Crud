<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Homeowner extends Model
{
    /** @use HasFactory<\Database\Factories\HomeownerFactory> */
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone',
        'address',
        'created_at',
        'updated_at',
    ];
}
