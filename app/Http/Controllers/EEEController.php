<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class EEEController extends Controller
{
     public function eee(){

     	$eeestudent_info=DB::table('student_tbl')
				->where (['student_department'=>3])
				->get();

		$manage_student=view('admin.eee')
				->with('eee_student_info',$eeestudent_info);
		return view('layout')
				->with('eee',$manage_student);

		return view ('admin.eee');
	}

	public function studentdelete($student_id){

		DB::table('student_tbl')
				->where('student_id',$student_id)
				->delete();

				return Redirect::to('/eee');
	}
}
