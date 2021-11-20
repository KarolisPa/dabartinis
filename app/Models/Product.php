<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'about',
        'category',
        'price',
        'unit_of_measurement',
        'model',
        'photo',
        'height',
        'width',
        'color',
        'discount_size',
        'discount_price',
        'discount_status',
        'discount_end'
    ];

    public function category(){
        return $this->hasOne(Category::class);
    }

}
