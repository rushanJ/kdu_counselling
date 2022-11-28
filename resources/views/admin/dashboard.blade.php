@extends('admin.templates.layout')
@section('content')
   
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Counsellors</p>
                    <h5 class="font-weight-bolder mb-0">
                    {{$counsellor_count}}
                     
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Students</p>
                    <h5 class="font-weight-bolder mb-0">
                        {{$student_count}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Session requests (Last Week)</p>
                    <h5 class="font-weight-bolder mb-0">
                     {{$session__requests_count_last_week}}
                     
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Session requests (All Time)</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$session__requests_count_all_time}}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
               
                  
                  <img src="https://quickchart.io/chart?c={
                            type: 'bar',
                            data: {
                                labels: ['-7 Days', '-14 Days', -'21 Days', '-28 Days'],
                                datasets: [
                                {
                                    type: 'line',
                                    label: 'Anexiety',
                                    borderColor: 'rgb(54, 162, 235)',
                                    borderWidth: 2,
                                    fill: false,
                                    data: {{$requestChart_anexiety}},
                                },
                                {
                                    type: 'line',
                                    label: 'Relationship',
                                    data: {{$requestChart_relationship}},
                                    borderColor: 'orange',
                                    borderWidth: 2,
                                    fill: false,
                                },
                                {
                                    type: 'line',
                                    label: 'Educational',
                                    backgroundColor: 'rgb(75, 192, 192)',
                                    data:  {{$requestChart_educational}},
                                    fill: false,
                                },
                                {
                                    type: 'line',
                                    label: 'Depression',
                                    backgroundColor: 'rgb(75, 192, 192)',
                                    data:  {{$requestChart_depression}},
                                    fill: false,
                                },
                                ],
                            },
                            options: {
                                title: {
                                display: true,
                                text: 'My chart',
                                },
                            },
                            }&v=2.9.4&w=500&h=300&bkg=white">
                    
                 
              
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg w-100" style="background-image: url('img/timeTable.png');">
             <img src="img/timeTable.png" style=" width : 100%; height :400px ">
              
            </div>
          </div>
        </div>
      </div>
     
   
  
    </div>




    </div>
    <!-- Testimonial End -->

@stop
