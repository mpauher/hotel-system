<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PhpParser\Node\Expr\Cast\Bool_;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'total',
        'booking_id'
    ];

    public function booking(): BelongsTo
    {
        return $this -> belongsTo(Booking::class);
    }
}
