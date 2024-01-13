<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable =[
        'product_id',
        'user_id',
        'user_name',
        'email',
        'phone',
        'address',
        'product_name',
        'img',
        'price',
        'total_price',
        'quantity'
    ];
}
