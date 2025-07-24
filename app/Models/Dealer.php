<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    //

    protected $guarded = [];

    function area(){

        return $this->belongsTo(Area::class)->select(['id','name']);
    }
}
