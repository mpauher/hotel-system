<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenitie extends Model
{
    use HasFactory;

    protected $fillable = [
        'air_conditionig',
        'room_service',
        'jacuzzi'
    ]; 
}