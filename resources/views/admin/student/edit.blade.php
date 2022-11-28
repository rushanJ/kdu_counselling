@extends('admin.templates.layout')

@section('content')
   
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <h6>Admin -> Dashboard -> Student<h6>
    <h3>Student</h3>
    
    <div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>Edit Student</h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              
 <form class="form" action="" method="POST" id="registrationForm">
                  @csrf
      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
      </div></hr><br>

 
         
          
        </div><!--/col-3-->
    	<div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                <!-- <input id="name" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ $user->id}}" required autocomplete="nic" autofocus> -->

                    <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="first_name"><h4>Rank </h4></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ $user->user_info->nic }}" required autocomplete="nic" autofocus>

                                        @error('nic')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Employee No </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="emp_no_student_no" type="text" class="form-control @error('emp_no_student_no') is-invalid @enderror" name="emp_no_student_no" value="{{ $user->user_info->emp_no_student_no }}" required autocomplete="emp_no_student_no" autofocus>

                                    @error('emp_no_student_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               </div>
                            </div>
                      </div>
                      
                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>First name </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="f_name" type="text" class="form-control @error('f_name') is-invalid @enderror" name="f_name" value="{{ $user->user_info->f_name }}" required autocomplete="f_name" autofocus>

                                    @error('f_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                      </div>
                      
                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Last name </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="l_name" type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name" value="{{ $user->user_info->l_name }}" required autocomplete="l_name" autofocus>

                                    @error('l_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror          
                                </div>
                            </div>
                      </div>
                      
                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Address </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->user_info->address }}" required autocomplete="address" autofocus>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                      </div>

                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Faculty </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="faculty" type="text" class="form-control @error('faculty') is-invalid @enderror" name="faculty" value="{{ $user->user_info->faculty }}" required autocomplete="faculty" autofocus>

                                    @error('faculty')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                              
                                </div>
                            </div>
                      </div>

                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Department </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ $user->user_info->department }}" required autocomplete="department" autofocus>

                                    @error('department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror          
                                </div>
                            </div>
                      </div>


                           

                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Intake </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="batch" type="text" class="form-control @error('batch') is-invalid @enderror" name="batch" value="{{ $user->user_info->batch }}" required autocomplete="batch" autofocus>

                                    @error('batch')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                 
                                </div>
                            </div>
                      </div>

                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Gender </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $user->user_info->gender }}" required autocomplete="gender" autofocus>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                      </div>

                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Phone </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->user_info->phone }}" required autocomplete="phone" autofocus>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror                               
                                </div>
                            </div>
                      </div>

                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Email Address </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                      </div>

                      <!-- <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Password </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                      </div>
                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Confirm Password</h4></label>
                                </div>
                                <div class="col-md-9">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                      </div> -->
                      
                   
          
                      <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                      
                   
                 
              	</form>
              
              <hr>
              
             </div>
           
               
              </div>
          </div>

        </div><!--/col-9-->
    </div><!--/row-->
                        


                </div>
    <!-- Testimonial End -->

@stop
