<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'sale', 'image', 'number'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'coupons_users', 'coupon_id', 'user_id');
    }
}
