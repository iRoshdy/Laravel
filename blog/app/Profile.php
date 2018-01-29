<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'avatars', 'about', 'facebook', 'youtube', 'twitter'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
