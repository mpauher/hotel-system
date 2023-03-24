<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use function PHPSTORM_META\type;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'max_persons',
        'status',
        'price',
        'type_id',
        'user_id'
    ];

    public function type(): BelongsTo
    {
       return $this -> belongsTo(type::class);
    }

    public function user(): BelongsTo
    {
        return $this ->belongsTo(User::class);
    }

    public function amenities(): BelongsToMany
    {
        return $this -> belongsToMany(Amenitie::class, 'AmenitiesRoom');
    }

    public function images(): HasMany
    {
        return $this -> hasMany(Image::class);
    }
    
    public function bookings(): HasMany
    {
        return $this -> hasMany(Bookings::class);
    }
}
