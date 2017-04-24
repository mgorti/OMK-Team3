<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingStudents extends Model
{
    //
    protected $fillable=[
        'id',
		'name',
        'date',
        'time',
        'location'

    ];
    	public function mentor() {
        return $this->belongsTo('App\Mentor');
	   }
}
