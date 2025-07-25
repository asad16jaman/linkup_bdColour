<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Dealer extends Model
{
    //

    protected $guarded = [];

    function area(){

        return $this->belongsTo(Area::class)->select(['id','name']);
    }

    protected function website(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value, 
            set: fn ($value) => htmlspecialchars($value, ENT_QUOTES, 'UTF-8')
        );
    }

}
