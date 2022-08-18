@extends('admin.templates.layout')

@section('content')
   
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <h6>Admin -> Dashboard -> Counsellor<h6>
    <h3>Counsellor</h3>
    
    <div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>{{ $user->user_info->f_name }} {{ $user->user_info->l_name }}</h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="../../storage/{{ $user->user_info->image }}" class=" img-circle img-thumbnail" alt="avatar">
      </div></hr><br>

    
         
          
        </div><!--/col-3-->
    	<div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>First name </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name"><h5> {{ $user->user_info->f_name }}</h5></label>
                                    <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                                </div>
                            </div>
                      </div>
                     
                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Last name </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name"><h5> {{ $user->user_info->l_name }}</h5></label>
                                    <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                                </div>
                            </div>
                      </div>
                      
                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Address </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name"><h5> {{ $user->user_info->address }}</h5></label>
                                    <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                                </div>
                            </div>
                      </div>

                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Job Title </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name"><h5> {{ $user->user_info->nic }}</h5></label>
                                    <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                                </div>
                            </div>
                      </div>

                      

                     

                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Gender </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name"><h5> {{ $user->user_info->gender }}</h5></label>
                                    <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                                </div>
                            </div>
                      </div>

                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h4>Phone </h4></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name"><h5> {{ $user->user_info->phone }}</h5></label>
                                    <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                                </div>
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
