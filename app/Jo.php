<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jo extends Model
{
    protected $table = 'jo';

    protected $fillable = [
        'location_id', 'project_id', 'jo_id', 'desc', 'status_jo', 'target_date'
    ];


    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');       
    }
}
