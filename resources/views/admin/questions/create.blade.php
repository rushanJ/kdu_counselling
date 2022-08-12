@extends('admin.templates.layout')

@section('content')
   
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
<h6>Admin -> Dashboard -> Questions<h6>
    <h3>Questions</h3>
    
    <div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h5>New Question</h5></div>
    </div>
    <div class="row">
  		<div class="col-sm-12"><!--left col-->
              
 <form class="form" action="./create" method="POST" id="registrationForm">
                  @csrf
      </hr><br>

 
         
          
        </div><!--/col-3-->
    	<div class="col-md-12">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                 
                <div class="col-md-3">
                    <label for="first_name"><h4>Question </h4></label>
                </div>
                <div class="col-md-12">
               
                    @error('question')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                   
                <hr>
                <div class="col-md-3">
                
                          
                                <button type="submit" class="btn btn-primary">
                                    {{ __('save') }}
                                </button>
                          
                        
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
