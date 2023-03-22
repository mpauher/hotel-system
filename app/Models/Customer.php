<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable =[
        'identification',
        'first_name',
        'last_name',
        'address',
        'city',
        'country',
        'email',
        'iphone',

    ];
}
