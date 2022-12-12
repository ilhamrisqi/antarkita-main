<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricelist extends Model
{

    use HasFactory;
    protected $fillable = [
        'id',
        'pricelist_name',
        'harga',
        'created_at',
        'updated_at',

    ];
}

