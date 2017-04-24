<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MeetingStudents;
use App\Mentor;

class MeetingStudentsController extends Controller
{
    //
    public function index()
    {
        //
        $meeting_students = MeetingStudents::all();
        return view('meeting_students.index',compact('meeting_students'));
    }
    public function show($id)

    {
		$meeting_students = MeetingStudents::findOrFail($id);
		return view('meeting_students.show',compact('meeting_students'));
    }
}