<?php
namespace App\Http\Controllers;
use Request;
use App\Staff;
use App\Mentor;

class StaffController extends Controller
{

    public function index()
    {
        $staffs=Staff::all();
         return view('staffs.index', compact('staffs'));
    }

    public function show($id)
    {
        $staffs=Staff::find($id);
        return view('staffs.show',compact('staffs'));
    }


    public function create()
    {
        $mentors = Mentor::pluck('id','id');
        return view('staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $staffs=Request::all();
        Staff::create($staffs);
        return redirect('staffs');
    }

    public function edit($id)
    {
        $staffs=Staff::find($id);
        return view('staffs.edit',compact('staffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
        $staffUpdate=Request::all();
        $staffs=Staff::find($id);
        $staffs->update($staffUpdate);
        return redirect('staffs');
    }

    public function destroy($id)
    {
        Staff::find($id)->delete();
        return redirect('staffs');
    }

    
}
