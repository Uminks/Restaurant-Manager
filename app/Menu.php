<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function platos(){
    	return $this->hasMany(Plato::class)->orderBy('created_at', 'desc');
    }
}
