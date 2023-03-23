<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Amenitie extends Model
{
    use HasFactory;

    protected $fillable = [
        'air_conditioning',
        'room_service',
        'jacuzzi'
    ]; 

    public function rooms(): BelongsToMany
    {
        return $this -> belongsToMany(Room::class, 'AmenitiesRoom');
    }
}
