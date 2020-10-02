<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';

    protected $fillable = [
        'customer_id', 'location_name', 'phone', 'address', 'grup_name'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }


    public function location()
    {
        return $this->hasMany('App\Location');
    }
}
