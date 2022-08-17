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

        <div class="row g-4">
        @foreach ($users as $user)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
               <div class="team-item position-relative">
               <img class="img-fluid" src="../../storage/{{ $user->image }}" alt="" />
               <div class="team-text bg-white p-4">
                  <h5>{{$user->f_name}} {{$user->l_name}}</h5>
                  <h6>{{$user->gender}}</h6>
                  <h6>{{$user->faculty}}</h6>                  
                  <span>{{$user->department}}</span>
                  <br>
                  <a href='/servicesFromCounsellor/{{$user->user_id}}' type="button" class="btn btn-light">Select</a>
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