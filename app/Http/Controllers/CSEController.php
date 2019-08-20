<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class CSEController extends Controller
{
     public function cse(){

		$csestudent_info=DB::table('student_tbl')
				->where (['student_department'=>2])
				->get();

		$manage_student=view('admin.cse')
				->with('cse_student_info',$csestudent_info);
		return view('layout')
				->with('cse',$manage_student);


		return view('admin.cse');

	}

	public function studentdelete($student_id){

		DB::table('student_tbl')
				->where('student_id',$student_id)
				->delete();

				return Redirect::to('/cse');
	}
}
