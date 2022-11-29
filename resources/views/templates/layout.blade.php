<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Apex - Home Repair Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="http://critssl.com/kdu_counselling/public/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="http://critssl.com/kdu_counselling/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://critssl.com/kdu_counselling/public/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="http://critssl.com/kdu_counselling/public/css/style.css" rel="stylesheet" />
    <link href="http://critssl.com/kdu_counselling/public/css/custom.css" rel="stylesheet" />
  
  </head>

  <style>
      .star-wrapper {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        direction: rtl;
      }
      .star-wrapper a {
  font-size: 1em;
  color: #000;
  text-decoration: none;
  transition: all 0.5s;
  margin: 4px;
}
.star-wrapper a:hover {
  color: gold;
  transform: scale(1.3);
}
.s1:hover ~ a {
  color: gold;
}
.s2:hover ~ a {
  color: gold;
}
.s3:hover ~ a {
  color: gold;
}
.s4:hover ~ a {
  color: gold;
}
.s5:hover ~ a {
  color: gold;
}
.wraper {
  position: absolute;
  bottom: 30px;
  right: 50px;
}


      #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
        
        
      }


      input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
       
      }
      .answerarea {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 3px solid #fc7b03;
      }


      /* Mark input boxes that gets an error on validation: */
      input.invalid {
        background-color: #ffdddd;
      }

      /* Hide all steps by default: */
      .tab {
        display: none;
      }

      button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
      }

      button:hover {
        opacity: 0.8;
      }

      #prevBtn {
        background-color: #bbbbbb;
      }

    /* Make circles that indicate the steps of the form: */
    .step {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbbbbb;
      border: none;  
      border-radius: 50%;
      display: inline-block;
      opacity: 0.5;
    }

    .step.active {
      opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
      background-color: #04AA6D;
    }
  
input[type="radio"]{
  display: none;
}

#option-1:checked:checked ~ .option-1,
#option-2:checked:checked ~ .option-2,
#option-3:checked:checked ~ .option-3,
#option-4:checked:checked ~ .option-4{
  padding: 5px;
  
  border-color: #0069d9;
  background: #0069d9;
}
#option-1:checked:checked ~ .option-1 .dot,
#option-2:checked:checked ~ .option-2 .dot,
#option-3:checked:checked ~ .option-3 .dot,
#option-4:checked:checked ~ .option-4 .dot{
  background: #fff;
}
#option-1:checked:checked ~ .option-1 .dot::before,
#option-2:checked:checked ~ .option-2 .dot::before,
#option-3:checked:checked ~ .option-3 .dot::before,
#option-4:checked:checked ~ .option-4 .dot::before{
  opacity: 1;
  transform: scale(1);
}
.wrapper .option span{
  font-size: 20px;
  color: #808080;
}
#option-1:checked:checked ~ .option-1 span,
#option-2:checked:checked ~ .option-2 span,
#option-3:checked:checked ~ .option-3 span,
#option-4:checked:checked ~ .option-4 span{
  color: #fff;
}


#option-RELATIONSHIP:checked:checked ~ .option-RELATIONSHIP,
#option-EDUCATIONAL:checked:checked ~ .option-EDUCATIONAL,
#option-DEPRESSION:checked:checked ~ .option-DEPRESSION,
#option-ANXIETY:checked:checked ~ .option-ANXIETY{
  padding: 5px;
  
  border-color: #0069d9;
  background: #0069d9;
}
#option-RELATIONSHIP:checked:checked ~ .option-RELATIONSHIP .dot,
#option-EDUCATIONAL:checked:checked ~ .option-EDUCATIONAL .dot,
#option-DEPRESSION:checked:checked ~ .option-DEPRESSION .dot,
#option-ANXIETY:checked:checked ~ .option-ANXIETY .dot{
  background: #fff;
}
#option-RELATIONSHIP:checked:checked ~ .option-RELATIONSHIP .dot::before,
#option-EDUCATIONAL:checked:checked ~ .option-EDUCATIONAL .dot::before,
#option-DEPRESSION:checked:checked ~ .option-DEPRESSION .dot::before,
#option-ANXIETY:checked:checked ~ .option-ANXIETY .dot::before{
  opacity: 1;
  transform: scale(1);
}
.wrapper .option span{
  font-size: 20px;
  color: #808080;
}
#option-RELATIONSHIP:checked:checked ~ .option-RELATIONSHIP span,
#option-EDUCATIONAL:checked:checked ~ .option-EDUCATIONAL span,
#option-DEPRESSION:checked:checked ~ .option-DEPRESSION span,
#option-ANXIETY:checked:checked ~ .option-ANXIETY span{
  color: #fff;
}


.img-optioin{
  width: 500px;
  height: 300px;
}
</style>

  <body onclick="musicPlay()">
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    
    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
    >
      <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
          <img src="img/logo.png" class="img-logo" alt=""> KDU Counseling
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
          <a href="/" class="nav-item nav-link active">Home</a>
          @if(session()->get('role') =='STUDENT')
          <a href="services" class="nav-item nav-link">Services</a>
          <a href="counsellors" class="nav-item nav-link">Counsellors</a>
          <a href="mysessions" class="nav-item nav-link">My Sessions</a>
          @endif
          <a href="about.html" class="nav-item nav-link">About Us </a>
          <a href="contact.html" class="nav-item nav-link">Contact Us</a>
          
          @if (Auth::check())<form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <input type="submit" value="Logout"  style="null"class="nav-item nav-link">
              </form>
          @else <a class="nav-link"  class="nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          @endif
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    @yield('content')

<!-- <audio id="playAudio"  autoplay>
<source src="http://kducounselling.online/kdu_counselling/storage/app/public/please-calm-my-mind-125566.mp3" type="audio/mpeg" />
</audio>
<script>
// document.addEventListener('click', musicPlay);
// musicPlay();
// document.getElementById("myCheck").click();
document.getElementById("myDIV").addEventListener("scroll", musicPlay);

function musicPlay() {

document.getElementById('playAudio').play();
document.removeEventListener('click', musicPlay);
}
</script> -->

    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://critssl.com/kdu_counselling/public/lib/wow/wow.min.js"></script>
    <script src="http://critssl.com/kdu_counselling/public/lib/easing/easing.min.js"></script>
    <script src="http://critssl.com/kdu_counselling/public/lib/waypoints/waypoints.min.js"></script>
    <script src="http://critssl.com/kdu_counselling/public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="http://critssl.com/kdu_counselling/public/js/main.js"></script>
  </body>
</html>
