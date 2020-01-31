<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricesProduct extends Model
{
    protected $fillable = [
        'product_id', 'price_name', 'price',
    ];
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
