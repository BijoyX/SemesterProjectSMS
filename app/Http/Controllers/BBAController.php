<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class BBAController extends Controller
{
     public function bba(){

     	$bbastudent_info=DB::table('student_tbl')
				->where (['student_department'=>4])
				->get();

		$manage_student=view('admin.bba')
				->with('bba_student_info',$bbastudent_info);
		return view('layout')
				->with('bba',$manage_student);

		return view ('admin.bba');
	}

	public function studentdelete($student_id){

		DB::table('student_tbl')
				->where('student_id',$student_id)
				->delete();

				return Redirect::to('/bba');
	}
}
