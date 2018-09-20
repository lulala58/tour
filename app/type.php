<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tour;
class type extends Model
{
    //
    // id是不容许插入的
    protected $guarded = ["id"];

    public  function tours()
    {
        return $this->hasMany('App\tour');//关联关系对象
    }

}
