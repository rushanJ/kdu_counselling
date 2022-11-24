@extends('templates.layout')

@section('content')
   
<div class="row justify-content-center">
            
 
<div class="row">
  		<div class="col-sm-4"><!--left col-->
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
              
                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h6>Student :</h6></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name"> {{ $session_request->student_name }}</label>
                                </div>
                            </div>
                      </div>
                      <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h6>Service Method :</h6></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name">{{ $session_request->service_method }}</label>
                                    <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                                </div>
                            </div>
                      </div>
                      <div class="form-group">
                            <div class="row">
                            <div class="col-md-3">
                                    <label for="first_name"><h6>Remarks</h6></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name">{{ $session_request->remarks }}</label>
                                    <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                                </div>
                               
                            </div>
                      </div>

                      
                      
                      
                     
                     
                        @if($session_request->counseller_id==0)
           
                      <form class="form" action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-3">
                                        <label for="first_name"><h6>Counsellor</h6></label>
                            </div>
                                    
                            <div class="col-md-9">
                                        <select class="form-control @error('counsellor') is-invalid @enderror"  name="counsellor" id="counsellor">
                                        @foreach ($users as $user)
                                            <option class="form-control @error('counsellor') is-invalid @enderror"  value="{{$user->user_id}}">{{$user->f_name }} {{$user->l_name }}</option>                                                            
                                         @endforeach
                                           
                                        </select>                         
                                    </div>
                            </div>
                            

                        </div>
                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-3">
                                        <label for="first_name"><h6>Problem Type</h6></label>
                            </div>
                                    
                            <div class="col-md-9">
                                        <select class="form-control @error('counsellor') is-invalid @enderror" name="problem_type" id="problem_type">
                                      
                                        
                                        <option   value="Education">Education</option>  
                                            <option   value="Relationship">Relationship</option>  
                                            <option   value="Anexiety">Anexiety</option>  
                                            <option   value="Depresion">Depresion</option>                                                            
                                     
                                           
                                        </select>                         
                                    </div>
                            </div>
                            

                        </div>
                        <input type="submit" class="form-control" value="Request">
                     </form>

                     @else

                     <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="first_name"><h6>Counsellor :</h6></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name">{{ $session_request->counsellor_name }}</label>
                                    <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                                </div>
                            </div>
                      </div>
                      <div class="form-group">
                            <div class="row">
                            <div class="col-md-3">
                                    <label for="first_name"><h6>Problem Type</h6></label>
                                </div>
                                <div class="col-md-9">
                                    <label for="first_name">{{ $session_request->problem_type }}</label>
                                    <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                                </div>
                               
                            </div>
                      </div>
                     @endif
                     


                     @if($session_request->date==Null)
           
                    

          @else

          <div class="form-group">
                 <div class="row">
                     <div class="col-md-3">
                         <label for="first_name"><h6>Date :</h6></label>
                     </div>
                     <div class="col-md-9">
                         <label for="first_name">{{ $session_request->date }}</label>
                         <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                     </div>
                 </div>
           </div>
           <div class="form-group">
                 <div class="row">
                 <div class="col-md-3">
                         <label for="first_name"><h6>Time </h6></label>
                     </div>
                     <div class="col-md-9">
                         <label for="first_name">{{ $session_request->time }}</label>
                         <!-- <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any."> -->
                     </div>
                    
                 </div>
           </div>
          @endif
          <label for="first_name"><h6>Rate </h6></label>
          <form enctype ="multipart/form-data"  action="../addRate/{{$session_request->counseller_id }}" method="POST" id="registrationForm" >
                         @csrf
    
                          
                                 
                                        
                                       
                         <input id="rate" type="hidden"  name="rate"  required autocomplete="rate" autofocus>

                         <div class="star-wrapper">
                            <a onclick="setRate(5)" class="fas fa-star s1" id="s1" ></a>
                            <a onclick="setRate(4)" class="fas fa-star s2" id="s2"></a>
                            <a onclick="setRate(3)" class="fas fa-star s3" id="s3"></a>
                            <a onclick="setRate(2)" class="fas fa-star s4" id="s4"></a>
                            <a onclick="setRate(1)" class="fas fa-star s5" id="s5"></a>
                            </div>
                            <script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>

                            <script>
                                function setRate(value){
                                    document.getElementById("rate").value=value
                                    if (value==1) {
                                        document.getElementById("s5").style.color = "red";
                                    }
                                    if (value==2) {
                                        document.getElementById("s5").style.color = "red";
                                        document.getElementById("s4").style.color = "red";
                                    }
                                    if (value==3) {
                                        document.getElementById("s5").style.color = "red";
                                        document.getElementById("s4").style.color = "red";
                                        document.getElementById("s3").style.color = "red";
                                    }
                                    if (value==4) {
                                        document.getElementById("s5").style.color = "red";
                                        document.getElementById("s4").style.color = "red";
                                        document.getElementById("s3").style.color = "red";
                                        document.getElementById("s2").style.color = "red";
                                    }
                                    if (value==5) {
                                        document.getElementById("s5").style.color = "red";
                                        document.getElementById("s4").style.color = "red";
                                        document.getElementById("s3").style.color = "red";
                                        document.getElementById("s2").style.color = "red";
                                        document.getElementById("s1").style.color = "red";
                                    }
                                }
                            </script>
                           
     
                                           
                                    
                            

                         
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit Rating') }}
                                        </button>
                                    </div>
                         
                      
                   
                 
              	        </form>


                          






              <hr>
              <a href="http://ec2-54-248-70-255.ap-northeast-1.compute.amazonaws.com:3000/chat.html?username={{ $session_request->student_name }}&room={{ $session_request->id }}" type="button" class="btn btn-success"> Text Chat</a>
                     <a href="https://meet.jit.si/KDU{{ $session_request->id }}"  type="button" class="btn btn-warning">Video Chat</a>

             </div>
           
            
          </div>
      
          
        </div><!--/col-3-->
    	<div class="col-md-8">
          <div class="tab-content">
          <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name"><h6>Question</h6></label>
                                </div>
                                <div class="col-md-6">
                                    <label for="first_name"> <h6> Answer </h6></label>
                                </div>
                            </div>
                      </div>
                      @foreach ($student_request as $session_request)

                    <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name">{{ $session_request->question }}</label>
                                </div>
                                <div class="col-md-6">
                                    <label for="first_name"> {{ $session_request->answer }} </label>
                                </div>
                            </div>
                    <tr>
                
                  

                    </tr>
                    
                    @endforeach
                      
          
                    
              
                
               
              </div>
              
        </div><!--/col-9-->
    </div><!--/row-->
                      
          
        </div>



@stop

@section('scripts')
   <script src="{{ asset('js/partials.js') }}"></script>
@endsection