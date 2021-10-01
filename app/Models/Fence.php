<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fence extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category',
        'price',
        'unit_of_measurement',
        'model',
        'photo',
        'discount_size',
        'discount_price',
        'discount_status',
        'discount_end'
    ];
}
