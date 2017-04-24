<?php

namespace App\Http\Controllers;

use Request;

use App\StudentDetails;

class StudentDetailsController extends Controller
{

    public function index()
    {
        //
        $student_details=StudentDetails::all();
        return view('student_details.index',compact('student_details'));
    }

    public function show($id)
    {
        $student_details=StudentDetails::find($id);
        return view('student_details.show',compact('student_details'));
    }


    public function create()
    {
        return view('student_details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $student_details=Request::all();
        StudentDetails::create($student_details);
        return redirect('student_details');
	
    }

    // public function edit($id)
    // {
    //     $student_details=StudentDetails::find($id);
    //     return view('student_details.edit',compact('student_details'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    // public function update($id)
    // {
    //     //
    //     $postUpdate=Request::all();
    //     $student_details=StudentDetails::find($id);
    //     $student_details->update($postUpdate);
    //     return redirect('student_details');
    // }

    public function destroy($id)
    {
        StudentDetails::find($id)->delete();
        return redirect('student_details');
    }
}
