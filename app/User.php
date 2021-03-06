<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wines()
    {
        return $this->belongsToMany('App\Wine')->wherePivot('status', 'open')->withPivot('quantity', 'myprice', 'id', 'status');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function getCartQuantity() {
        return $this->orders->where('status', 'open')->sum('quantity');
    }

    public function getOrderValue() {
        $sum = 0;
        $orders = $this->orders->where('status', 'open');
        foreach ($orders as $order) {
            $sum += ($order->quantity) * ($order->myprice);
        }
        
        return $sum;
    }

}
