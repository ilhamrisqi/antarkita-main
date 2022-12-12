<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_gallery extends Model
{
    use HasFactory;
    protected $fillable=[
        'categorygalery_id',
        'category_name',
        'created_at',
        'update_at',
        'pricelist_id',
    ];
}
