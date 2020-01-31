<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParameterProduct extends Model
{
    protected $fillable = [
        'product_id', 'parameter_id', 'text',
    ];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
    public function parameter()
    {
    	return $this->belongsTo(Parameter::class);
    }
}
