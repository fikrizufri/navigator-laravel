<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    function get_parent()
    {
        return $this->belongsTo(Menu::class,'id','parent_id');
    }
    public function get_sons()
    {
        return $this->hasMany(Menu::class,'id','parent_id');
    }
}
