@extends('templates.layout')

@section('content')
   
<div class="row justify-content-center">
<div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Our Team</h6>
              <h1 class="display-6 mb-0">Our Expert Team</h1>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <p class="mb-0">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
              lorem sit clita duo justo magna dolore erat amet
            </p>
          </div>
        </div>

        <div class="row g-12">
        @foreach ($users as $user)
            <div class="container-fluid card rounded  shadow-lg" style="margin-bottom: 50px;">
      <div class="row"  >
        <div class="col-sm-3 col-md-6 col-lg-4" style="margin: 50px;">
          <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                  <img class="img-fluid" src="http://kducounselling.online/kdu_counselling/storage/app/public/{{ $user->image }}" style="width: 300px;" alt="" />
                </div>
              </div>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-6" style="margin: 50px;">
        <h5>{{$user->f_name}} {{$user->l_name}}</h5>
                    <h6>{{$user->nic}}</h6>
                    <div style="white-space: pre-wrap;">{{$user->description}}</div>
                  <br>
                    @php 
                        if (!$user->no_of_responses==0){
                          for ($x = 0; $x <=$user->response_total/ $user->no_of_responses; $x++) {
                                  echo "<span class='fa fa-star checked'></span>";
                                }
                        }
                      @endphp
                    
                    <!-- <h6>{{$user->faculty}}</h6>                  
                    <span>{{$user->department}}</span> -->
                   
                    
<br>
<br>
                    <a href='./servicesFromCounsellor/{{$user->user_id}}' type="button" class="btn btn-light">Select</a>
        </div>
      </div>
    </div>
            
          
          @endforeach
          
          
           
        </div>
      </div>
    </div>



</div>



@stop

@section('scripts')
   <script src="{{ asset('js/partials.js') }}"></script>
@endsection