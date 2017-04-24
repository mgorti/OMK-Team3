<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addcomment extends Model
{
    //
    protected $fillable=[
        'id',
		'mentor_id',
        'student_id',
        'comment'


    ];
        public function mentor() {
        return $this->belongsTo('App\Mentor');
        }
		public function student() {
        return $this->belongsTo('App\Student');
	   }
}