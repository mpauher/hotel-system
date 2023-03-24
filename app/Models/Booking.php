<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'checkin_date',
        'checkout_date',
        'comments',
        'status',
        'price',
        'customer_id',
        'room_id'
    ];

    public function room(): BelongsTo
    {
        return $this -> belongsTo(Room::class);
    }

    public function customer(): BelongsTo
    {
        return $this -> belongsTo(Customer::class);
    }

    public function payments(): HasMany
    {
        return $this -> hasMany(Payment::class);
    }
}
