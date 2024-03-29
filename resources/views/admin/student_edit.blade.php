@extends ('layout')

@section('content')


  <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Information form</h2>
                          <p class ="alert-success"><?php
                                $exception= Session:: get('exception');

                                if($exception)
                                {
                                  echo $exception;
                                  Session :: put ('exception',null);

                                }
                              ?></p>

                          <form class="forms-sample" method="post" action="{{URL::to('/update_student',$student_description_profile->student_id)}}">
                          	{{csrf_field()}}

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Student Name</label>
                                  <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{($student_description_profile->student_name)}}">
                             </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Roll</label>
                                  <input type="text" class="form-control p-input" name="student_roll" value="{{($student_description_profile->student_roll)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Fathers Name</label>
                                  <input type="text" class="form-control p-input" name="student_fathersname" value="{{($student_description_profile->student_fathersname)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Mothers Name</label>
                                  <input type="text" class="form-control p-input" name="student_mothersname" value="{{($student_description_profile->student_mothersname)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" value="{{($student_description_profile->student_phone)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Year of Admission </label>
                                  <input type="date" class="form-control p-input" name="student_admissionyear" 
                                  value="{{($student_description_profile->student_admissionyear)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control p-input" name="student_email" aria-describedby="emailHelp" 
                                  value="{{($student_description_profile->student_email)}}">
                                  <small id="emailHelp" class="form-text text-muted text-success">We'll never share your email with anyone else.</small>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="student_password" value="{{($student_description_profile->student_password)}}">
                              </div>

                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>



@endsection