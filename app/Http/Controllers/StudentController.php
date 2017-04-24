<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;



class StudentController extends Controller
{

    public function index()
    {
        //
        
        $students=Student::all();
        
        return view('students.index',compact('students'));
    }

        public function create()
     {
         return view('students.create');
     }

         public function show($id)
     {
      
        $student=Student::find($id);
        return view('Home',compact('student'));
     }
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @return Response
    //  */
     public function store(Request $request)
    {
        $student = new Student($request->all());

        /*$student->id = $request['id'];
        $student->name = $request['name'];
        $student->class = $request['class'];
        $student->email = $request['email'];
        $student->address = $request['address'];
        $student->zip = $request['zip'];
        $student->cell_phone = $request['cell_phone'];*/

        $student->save();
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    public function edit($id)
     {
         $student=Student::find($id);
         return view('students.edit',compact('student'));
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
        $student=Student::find($id);
        $student->update($studentUpdate);*/
        $student= new Student($request->all());
        $student = Student::find($id);
        $student-> update($request->all());
        return redirect('students');
     }

     public function destroy($id)
     {
         Student::find($id)->delete();
         $students = Student::all();
         return view('students.index', compact('students'));
     }
}



