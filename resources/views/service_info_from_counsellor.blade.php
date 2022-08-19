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
                                      
                                            <option   value="Type1">Type1</option>  
                                            <option   value="Type2">Type2</option>  
                                            <option   value="Type3">Type3</option>  
                                            <option   value="Type4">Type4</option>                                                            
                                     
                                           
                                        </select>                         
                                    </div>
                            </div>
                            

                        </div>
                        <input type="submit" class="form-control" value="Assign">
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
              <hr>
              <a href="http://localhost:3000/chat.html?username={{ $session_request->student_name }}&room={{ $session_request->id }}" type="button" class="btn btn-success"> Text Chat</a>
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