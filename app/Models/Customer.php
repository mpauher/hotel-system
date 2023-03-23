<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'phone',
    ];

    public function bookings(): HasMany
    {
        return $this -> hasMany(Booking::class);
    }
}
