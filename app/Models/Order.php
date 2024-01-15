<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',

        'product_id',

        'user_name',

        'user_email',

        'user_phone',

        'product_name',

        'product_price',

        'product_quantity',

        'img',

    ];
}
