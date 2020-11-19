<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = 'asset';

    protected $fillable = [
        'jo_id','serial_number', 'produk_id', 'produk_type', 'foto'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function jo()
    {
        return $this->belongsTo('App\Jo');
    }
    
}
