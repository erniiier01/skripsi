<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $fillable = [
        'code_customer', 'nama_customer'
    ];

    public function project()
    {
        return $this->hasMany('App\Project');
    }

    public function location()
    {
        return $this->hasMany('App\Location');
    }
}