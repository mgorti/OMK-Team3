<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Addcomment;
use App\Mentor;
use App\Student;

class AddcommentController extends Controller
{
    public function index()
    {
        //
        $addcomments = Addcomment::all();
        return view('addcomments.index',compact('addcomments'));
    }

      public function create()
     {
         $mentors = Mentor::pluck('id','id');
		 return view('addcomments.create', compact('mentors'));
     }
      public function show($id)
    {

        $addcomment = Addcomment::findOrFail($id);

        return view('addcomments.show',compact('addcomment'));
    }

    public function store(Request $request)
    {
		$addcomment= new Addcomment($request->all());
        $addcomment->save();

        return redirect('addcomments');
//$addcomment = new Addcomment();
       //$addcomment->mentor_id = $request['mentor_id'];
	  // $mentor_id = Input::get('mentor_id');
		//$addcomment->mentor_id = input::get('mentor_id');
	    //$addcomment->student_id = $request['student_id'];
        //$addcomment->comment = $request['comment'];
		//dd('Im here' );
		//dd( $addcomment->mentor_id);
		//$addcomment->save();
       // $addcomment = Addcomment::all();
        //$addcomment= new Addcomment($request->all());
        //$addcomment->save();

       // return redirect('addcomments');
    }
    public function destroy($id)
     {
         Addcomment::find($id)->delete();
         $addcomments = Addcomment::all();
         return view('addcomments.index', compact('addcomments'));
     }
    
}

