<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentDetails extends Model
{
    //
        protected $fillable=[
        'id',
        'student_name',
        'attendance',
        'comment'
		// 'attendance_absent'
    ];

}
