<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmenitieRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'amenitie_id'
    ];
}
