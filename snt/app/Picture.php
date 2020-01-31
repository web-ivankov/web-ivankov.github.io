<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'src_img'
    ];

    public function picture_product()
    {
    	return $this->HasMany(PictureProduct::class);
    }
}
