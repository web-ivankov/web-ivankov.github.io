<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $fillable = [
        'name',
    ];
    public function parameter_of_product()
    {
        return $this->HasMany(ParameterOfProduct::class);
    }
}
