<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MeetingSchedule;
use App\Mentor;

class MeetingScheduleController extends Controller
{
    public function index()
    {
        //
        $meeting_schedules = MeetingSchedule::all();
        return view('meeting_schedules.index',compact('meeting_schedules'));
    }

      public function create()
     {
         $mentors = Mentor::pluck('id','id');
		 return view('meeting_schedules.create', compact('mentors'));
     }
      public function show($id)
    {

        $meeting_schedules = MeetingSchedule::findOrFail($id);

        return view('meeting_schedules.show',compact('meeting_schedules'));
    }

    public function store(Request $request)
    {
		$meeting_schedules= new MeetingSchedule($request->all());
        $meeting_schedules->save();
        $meeting_schedules=MeetingSchedule::all();
         return view('meeting_schedules.index',compact('meeting_schedules'));

    }
    public function destroy($id)
     {
         MeetingSchedule::find($id)->delete();
         $meeting_schedules = MeetingSchedule::all();
         return view('meeting_schedules.index', compact('meeting_schedules'));
     }
    
}

