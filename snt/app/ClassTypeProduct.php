<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassTypeProduct extends Model
{
    protected $fillable = [
        'name'
    ];

    public function TypeProducts()
    {
    	return $this->HasMany(TypeProduct::class);
    }
}
