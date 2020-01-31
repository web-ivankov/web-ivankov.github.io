<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id','name','picture_id', 'description', 'type_product_id', 
    ];

    public function type_product()
    {
    	return $this->belongsTo(TypeProduct::class);
    }
    public function parameter_of_product()
    {
        return $this->HasMany(ParameterOfProduct::class);
    }
    public function picture_product()
    {
        return $this->HasMany(PictureProduct::class);
    }
    public function prices_product()
    {
        return $this->HasMany(PricesProduct::class);
    }
}
