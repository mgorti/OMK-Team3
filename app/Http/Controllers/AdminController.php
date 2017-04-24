<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Request;
use App\Http\Requests;
use App\Admin;

class AdminController extends Controller
{

    public function index()
    {
        //
        $admins=Admin::all();
        return view('admins.index',compact('admins'));
    }

    public function show($id)
    {
        $admin=Admin::find($id);
        return view('admins.show',compact('admin'));
    }

    public function create()
    {
        return view('admins.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @return Response
    //  */
    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->id = $request['id'];
        $admin->name = $request['name'];
        $admin->email = $request['email'];
        $admin->address = $request['address'];
        $admin->zip = $request['zip'];
        $admin->cell_phone = $request['cell_phone'];
        $admin->save();
        $admins = Admin::all();
        return view('admins.index',compact('admins'));
    }

    public function edit($id)
    {
        $admin=Admin::find($id);
        return view('admins.edit',compact('admin'));
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
        $staff=Staff::find($id);
        $student->update($studentUpdate);*/
        $admin= new Admin($request->all());
        $admin = Admin::find($id);
        $admin->update($request->all());
        return redirect('admins');
    }

    public function destroy($id)
    {
        Admin::find($id)->delete();
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }
}



