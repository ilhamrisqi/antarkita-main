<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'booking_name',
        'booking_email',
        'booking_phone',
        'booking_date',
        'created_at',
        'updated_at',
    ];
}
