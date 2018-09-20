<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    // id是不容许插入的
    protected $guarded = ["id"];
//    public  function type()
//    {
//        return $this->hasMany('App\type');
//    }
    public  function type()
    {
        return $this->belongsTo('App\type');
    }
}
