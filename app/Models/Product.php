<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    //

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class)->select(['id','name']);
    }

    public function image(){
        return $this->hasOne(ProductImage::class)->latest();
    }


    protected function lognDescription(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => htmlspecialchars_decode($value, ENT_QUOTES),
            set: fn ($value) => htmlspecialchars($value, ENT_QUOTES, 'UTF-8')
        );
    }



    
}
