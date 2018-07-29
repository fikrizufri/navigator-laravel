<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    function parents()
    {
        return $this->hasMany(Menu::class,'parent_id','id');
    }

    function child()
    {
        return $this->hasMany(Menu::class,'parent_id','id');
    }
  
}
