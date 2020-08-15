<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function gallery(){
        return $this->hasMany(Gallery::class, 'product_id','id');
    }
}
