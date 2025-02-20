<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Homeowner extends Model
{
    /** @use HasFactory<\Database\Factories\HomeownerFactory> */
    use HasFactory, HasFactory, HasApiTokens;

    protected $fillable = [
        'first_name' => 'required|string|max:255',
        'middle_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:homeowners',
        'phone' => 'required|string|max:255',
        'address' => 'required|string|max:255', 
    ];
}
