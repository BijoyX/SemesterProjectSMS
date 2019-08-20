@extends ('student_layout')

@php
		function convert_department($value){

			$values=[
				1=>'SWE',
				2=>'CSE',
				3=>'EEE',
				4=>'BBA',
				5=>'TCE',
			];
			return $values[$value];
	}
@endphp


@section('content')


          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_profile->student_image)}}">
                  <p class="name">{{$student_profile->student_name}}</p>
                  <p class="designation">Roll: {{$student_profile->student_roll}}</p>
                  <a class="email">Email: {{$student_profile->student_email}}</a>
                  <a class="number">Phone: {{$student_profile->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  

                  	<h1>Daffodil International University</h1>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">Student's Information Management System</h2>
                    <p>All information of student is given bellow.(All Rights are Reserved and We don't share any personal information to others!) </p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon">Father's Name:</i>
                      <span>{{$student_profile->student_fathersname}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Mother's Name:</i>
                      <span>{{$student_profile->student_mothersname}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Address:</i>
                      <span>{{$student_profile->student_address}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Admission Year:</i>
                      <span>{{$student_profile->student_admissionyear}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Department:</i>
                      <span>{{convert_department($student_profile->student_department)}}</span>
                    </a>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        


@endsection