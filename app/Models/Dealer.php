<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    //

    protected $guarded = [];

    function areas(){

        return $this->hasMany(Area::class)->select(['id','name']);
    }
}
