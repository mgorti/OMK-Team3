<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mentor;
use App\Student;



class MentorController extends Controller
{

    public function index()
    {
        //
        
        $mentors=Mentor::all();
        
        return view('mentors.index',compact('mentors'));
    }

        public function create()
     {
         return view('mentors.create');
     }

         public function show($id)
     {
      
        $mentor = Mentor::find($id);
        $students = Student::where('mentor_id', $mentor->id)->get();
        //dd($students);



        return view('mentors.show',compact('mentor', 'students'));
     }
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @return Response
    //  */
     public function store(Request $request)
    {
        $mentor = new Mentor();
        $mentor->name = $request['name'];
        $mentor->qualification = $request['qualification'];
        $mentor->address = $request['address'];
        $mentor->zip = $request['zip'];
        $mentor->email = $request['email'];
        $mentor->phone = $request['phone'];
       // $mentor->comment = $request['comment'];
        $mentor->save();
        $mentors = Mentor::all();
        return view('mentors.index',compact('mentors'));
    }

    public function edit($id)
     {
         $mentor=Mentor::find($id);
         return view('mentors.edit',compact('mentor'));
     }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
     public function update($id,Request $request)
     {
       
        /*$mentorUpdate=Request::all();
        $mentor=Mentor::find($id);
        $mentor->update($mentorUpdate);*/
        $mentor= new Mentor($request->all());
        $mentor = Mentor::find($id);
        $mentor-> update($request->all());
        return redirect('mentors');
     }

     public function destroy($id)
     {
         Mentor::find($id)->delete();
         $mentors = Mentor::all();
         return view('mentors.index', compact('mentors'));
     }
}
