<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class TCEController extends Controller
{
     public function tce(){

     	$tcestudent_info=DB::table('student_tbl')
				->where (['student_department'=>5])
				->get();

		$manage_student=view('admin.tce')
				->with('tce_student_info',$tcestudent_info);
		return view('layout')
				->with('tce',$manage_student);

		return view ('admin.tce');
	}

	public function studentdelete($student_id){

		DB::table('student_tbl')
				->where('student_id',$student_id)
				->delete();

				return Redirect::to('/tce');
	}
}
