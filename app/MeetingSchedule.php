<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingSchedule extends Model
{
    //
	protected $fillable=[
        'id',
		'mentor_name',
		'student_name',
		'date',
		'time',
		'location'
       
    ];
		public function mentor() {
        return $this->belongsTo('App\Mentor');
}
		
}
