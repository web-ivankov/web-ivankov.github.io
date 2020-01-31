<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $fillable = [
        'name', 'class_type_product_id'
    ];

    public function class_type_product()
    {
    	return $this->belongsTo(ClassTypeProduct::class);
    }
    public function Products()
    {
    	return $this->HasMany(Product::class);
    }
}
