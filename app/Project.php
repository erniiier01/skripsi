<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    protected $fillable = [
        'customer_id', 'project_code', 'desc', 'tanggal_mulai', 'tanggal_selesai'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
