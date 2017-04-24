<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
//Excel 
use App\ContactUS;
use App\userrequests;
use Input;
use App\Staff;
use App\Mentor;
use App\Student;
use DB;
use Excel;
class ExcelController extends Controller
{
	public function staff_print()
	{
		return view('stfprnt'); // staff print button bladepage
	}
	public function downloadExcel($type)
	{
		$data = Staff::get()->toArray();
		return Excel::create('staff_rpt', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	
	public function mentor_print()
	{
		return view('mntrprnt');
	}
	public function student_print()
	{
		return view('stdprnt');
	}

	public function dwnld_mentor($type)
	{
		$data = Mentor::get()->toArray();
		return Excel::create('Mentor_rpt', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function dwnld_student($type)
	{
		$data = Student::get()->toArray();
		return Excel::create('Student_rpt', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	
	public function importExcel()
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['title' => $value->title, 'description' => $value->description];
				}
				
			}
		}
		return back();
	}
}