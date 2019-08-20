<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class SWEController extends Controller
{
     public function swe(){

     	$swestudent_info=DB::table('student_tbl')
				->where (['student_department'=>1])
				->get();

		$manage_student=view('admin.swe')
				->with('swe_student_info',$swestudent_info);
		return view('layout')
				->with('swe',$manage_student);

		return view ('admin.swe');
	}

	public function studentdelete($student_id){

		DB::table('student_tbl')
				->where('student_id',$student_id)
				->delete();

				return Redirect::to('/swe');
	}
}
