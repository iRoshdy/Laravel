<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['name', 'email', 'address', 'phone_num', 'product_id'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
