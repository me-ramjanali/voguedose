<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClothSets extends Model
{
    protected $fillable = [
        'name', 'product_codes', 'order_id'
    ];
}
