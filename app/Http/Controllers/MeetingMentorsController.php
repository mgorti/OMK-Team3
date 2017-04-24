<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MeetingMentors;
use App\Student;

class MeetingMentorsController extends Controller
{
    //
    public function index()
    {
        //
        $meeting_mentors = MeetingMentors::all();
        return view('meeting_mentors.index',compact('meeting_mentors'));
    }
    public function show($id)

    {
		$meeting_mentors = MeetingMentors::findOrFail($id);
		return view('meeting_mentors.show',compact('meeting_mentors'));
    }
}