@extends('templates.layout')
@section('content')
   
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="img/carousel-1.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                      Welcome to KDU Counseling

                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                    Reach Your Goals and Get Real Results.
                    <ol class="breadcrumb mb-4 pb-2">
                      <li class="breadcrumb-item fs-5 text-light">
                      Easily Accessible
                      </li>
                      <li class="breadcrumb-item fs-5 text-light">
                      Real Privacy
                      </li>
                      <li class="breadcrumb-item fs-5 text-light">
                      Convenient
                      </li>
                    </ol>
                    <!-- <a href="" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    > -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
              <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                      Welcome to KDU Counseling

                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                    Reach Your Goals and Get Real Results.
                    <ol class="breadcrumb mb-4 pb-2">
                      <li class="breadcrumb-item fs-5 text-light">
                      Easily Accessible
                      </li>
                      <li class="breadcrumb-item fs-5 text-light">
                      Real Privacy
                      </li>
                      <li class="breadcrumb-item fs-5 text-light">
                      Convenient
                      </li>
                    </ol>
                    <!-- <a href="" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    > -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="img/about.jpg"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                style="width: 200px; height: 200px"
              >
                <div
                  class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3"
                >
                  <h1 class="text-white">Best</h1>
                  <h4 class="text-white">Counseling Services </h4>
                  <h5 class="text-white mb-0">For You</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">About Us</h6>
                <h1 class="display-6 mb-0">
                KDU Counseling
                </h1>
              </div>
              <p>
                KDU student counseling services will be able to manage, facilitate KDU students' pursuit of their academic and 
                personal goals, protect student privacy, and develop and enhance student potential, mental health, and well-being, 
                as well as provide additional counseling services, and it aims to prevent spending money on and provide an efficient 
                and reliable service to avoid psychological problems for better academic performance
              </p>
              
              <div class="border-top mt-4 pt-4">
                <div class="row g-4">
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Easily Accessible</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Convenient</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Convenient</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid my-5 p-0">
      <div class="row g-0">
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
          <div class="position-relative">
            <img class="img-fluid w-100" src="img/fact-1.jpg" alt="" />
            <div class="facts-overlay">
              <h1 class="display-1">01</h1>
              <h4 class="text-white mb-3">Educational Counseling</h4>
             
              <a class="text-white small" href="educational.html"
                >READ MORE<i class="fa fa-arrow-right ms-3"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
          <div class="position-relative">
            <img class="img-fluid w-100" src="img/fact-2.jpg" alt="" />
            <div class="facts-overlay">
              <h1 class="display-1">02</h1>
              <h4 class="text-white mb-3">Relationship Counseling</h4>
             
              <a class="text-white small" href="relationship.html"
                >READ MORE<i class="fa fa-arrow-right ms-3"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="position-relative">
            <img class="img-fluid w-100" src="img/fact-3.jpg" alt="" />
            <div class="facts-overlay">
              <h1 class="display-1">03</h1>
              <h4 class="text-white mb-3">Depression Counseling</h4>
              
              <a class="text-white small" href="depression.html"
                >READ MORE<i class="fa fa-arrow-right ms-3"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
          <div class="position-relative">
            <img class="img-fluid w-100" src="img/fact-4.jpg" alt="" />
            <div class="facts-overlay">
              <h1 class="display-1">04</h1>
              <h4 class="text-white mb-3">Anxiety Counseling</h4>
             
              <a class="text-white small" href="anxiety.html"
                >READ MORE<i class="fa fa-arrow-right ms-3"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Why Choose Us!</h6>
              <h1 class="display-6 mb-0">
              What is online counselling exactly?
              </h1>
            </div>
            <p class="mb-5">
            It's the same as face to face counselling except you have your online counselling session from the privacy of your own home. We'll securely connect you to your counsellor or psychologist over an encrypted, face to face, video consultation.
            </p>
          
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="position-relative overflow-hidden ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="img/fact-1.jpg"
                alt=""
                style="object-fit: cover"
              />
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

  

    <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Our Team</h6>
              <h1 class="display-6 mb-0">Our Expert Counselors</h1>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <p class="mb-0">
            Are you worrying about
your academic,
relationship, personal,
financial
or social life?
            </p>
            <p class="mb-0">
            Stop worrying alone. No matter
who you are or how you feel,
we are here to listen to you
with open ears and open
hearts.
            </p>
          </div>
        </div>

        

<br>
<br>
<br>
<br>
<br>

        <div class="row g-4">
        @foreach ($users as $user)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
               <div class="team-item position-relative">
               <img class="img-fluid" style="width:99vh" src="http://critssl.com/kdu_counselling/storage/app/public/{{ $user->image }}" alt="" />
               <div class="team-text bg-white p-4">
                  <h5>{{$user->f_name}} {{$user->l_name}}</h5>
                  <h6>{{$user->nic}}</h6>
                 
               </div>
               </div>
            </div>
          
          @endforeach
          </div>  
       
      </div>
    </div>
    <!-- Team End -->

 
    <!-- Testimonial End -->




    <!-- <audio autoplay>
  <source src="https://critssl.com/kdu_counselling/storage/app/public/please-calm-my-mind-125566.mp3" type="audio/wav" />
</audio> -->

@stop
