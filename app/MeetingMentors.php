<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingMentors extends Model
{
    //
    protected $fillable=[
        'id',
		'name',
        'date',
        'time',
        'location'

    ];
    	public function student() {
        return $this->belongsTo('App\Student');
	   }
}
