<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function picture(){
        if (file_exists( public_path() . '/img/winepics/wijn'.$this->id.'.jpg')) {
            return '/img/winepics/wijn'.$this->id.'.jpg';
        } else {
            return '/img/winepics/wijn2.jpg';
        }     
    }

}
