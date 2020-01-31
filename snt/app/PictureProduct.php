<?php

namespace App;

use App\Models\Filters\PictureProduct\PictureProductSearch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;


class PictureProduct extends Model
{
    public function picture()
    {
    	return $this->belongsTo(Picture::class);
    }
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
