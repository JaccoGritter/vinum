<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function picture(){
        if (file_exists( public_path() . '/img/winepics/wijn'.$this->id.'.jpg')) {
            return '/img/winepics/wijn'.$this->id.'.jpg';
        } else {
            return '/img/winepics/wijn2.jpg';
        }     

    }

}
