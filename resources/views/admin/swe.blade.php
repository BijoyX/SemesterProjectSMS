@extends ('layout')

@section('content')

	<div class="card">
            <div class="card-body">
              <h2 class="card-title">Information & Details</h2>
              <div class="row">
                <div class="col-20">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Student's Roll</th>
                          <th>Student's Name</th>
                          <th>Father's Name</th>
                          <th>Mother's Name</th>
                          <th>Email Address</th>
                          <th>Phone Numeber</th>
                          <th>Image</th>
                          <th>Department</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($swe_student_info as $v_student)
                      <tr>
                          <td>{{$v_student->student_roll}}</td>
                          <td>{{$v_student->student_name}}</td>
                          <td>{{$v_student->student_fathersname}}</td>
                          <td>{{$v_student->student_mothersname}}</td>
                          <td>{{$v_student->student_email}}</td>
                          <td>{{$v_student->student_phone}}</td>
                          <td><img src="{{URL::to($v_student->student_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>
                          	@if ($v_student->student_department==1)
                          	<span class="label label-success">{{'SWE'}}</span>
                          	@elseif ($v_student->student_department==2)
                          	<span class="label label-success">{{'CSE'}}</span>
                          	@elseif ($v_student->student_department==3)
                          	<span class="label label-success">{{'EEE'}}</span>
                          	@elseif ($v_student->student_department==4)
                          	<span class="label label-success">{{'BBA'}}</span>
                          	@elseif ($v_student->student_department==5)
                          	<span class="label label-success">{{'TCE'}}</span>
                          	@endif
                          </td>
                         
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                            <button class="btn btn-outline-warning">Edit</button>
                            <a href="{{URL::to('/student_delete/'.$v_student->student_id)}}"  id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                   </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

@endsection