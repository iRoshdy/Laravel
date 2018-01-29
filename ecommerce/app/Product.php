<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'price', 'image', 'description'];

    public function infos()
    {
        return $this->belongsTo('App\Info');
    }
}
