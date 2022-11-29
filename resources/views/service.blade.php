@extends('templates.layout')

@section('content')
   
<div class="row justify-content-center">
 
<form id="regForm" method="post" action="services/create">
@csrf

  <div class="tab">
      
      <div class="row">
          <input type="radio" name="type" value="RELATIONSHIP" id="option-RELATIONSHIP" checked>
          <input type="radio"  name="type" value="EDUCATIONAL" id="option-EDUCATIONAL">
          <input type="radio" name="type" value="DEPRESSION" id="option-DEPRESSION" >
          <input type="radio"  name="type" value="ANXIETY" id="option-ANXIETY">

          <label for="option-RELATIONSHIP" class="option option-RELATIONSHIP col-sm-3">
              
          <img style="width:250px" src="https://media.istockphoto.com/id/1280359257/vector/hands-holding-a-torn-photo-of-a-couple-in-love.jpg?s=612x612&w=0&k=20&c=jkDSIkqFxSbnFJwh7wOSv2txR-68ypmcrpIykqltiAU=" alt="" class="img-optioin">

              <span style="padding-left:10vh">RELATIONSHIP</span>
              </label>
          
          <label for="option-EDUCATIONAL" class="option option-EDUCATIONAL col-sm-3">
          
          <img style="width:250px" src="https://c8.alamy.com/comp/2HMCF32/cute-child-with-learning-problem-vector-illustration-cartoon-confused-girl-sitting-at-table-with-homework-young-student-in-doubt-thinking-about-answer-on-question-education-troubles-concept-2HMCF32.jpg" alt="" class="img-optioin">

              <span style="padding-left:10vh">EDUCATIONAL</span>
                  </label>

          <label for="option-DEPRESSION" class="option option-DEPRESSION col-sm-3">
              
          <img style="width:250px"  src="https://static.vecteezy.com/system/resources/previews/003/597/520/original/depressed-woman-sitting-with-her-head-down-free-vector.jpg" alt="" class="img-optioin">
  
                <span style="padding-left:10vh">DEPRESSION</span>
                </label>
          <label for="option-ANXIETY" class="option option-ANXIETY col-sm-3">
          <img style="width:250px" src="https://img.freepik.com/free-vector/anxiety-concept-illustration_114360-8074.jpg" class="img-optioin" alt="">

              <span style="padding-left:10vh">ANXIETY</span>
          </label>
          
      </div>

    </div>

  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    
    <div class="row">
        <input type="radio" name="relationship" value="ANNONIMOUS" id="option-1" checked>
        <input type="radio"  name="relationship" value="OPEN" id="option-2">
        <label for="option-1" class="option option-1 col-sm-6">
            
        <img src="https://png.pngtree.com/png-clipart/20220613/original/pngtree-unknown-user-question-mark-about-png-image_7997211.png" alt="" class="img-optioin">

            <span style="padding-left:25vh">ANNONYMOUS</span>
            </label>
        <label for="option-2" class="option option-2 col-sm-6">
        <img src="https://thumbs.dreamstime.com/b/conversation-two-person-conversation-two-person-concept-meeting-woman-man-chat-online-real-communication-160609745.jpg" class="img-optioin" alt="">

            <span style="padding-left:30vh">OPEN</span>
        </label>
        
    </div>

  </div>


  
  @foreach ($questions as $question)
            <div class="tab">
                <h3>{{ $question->question }} </h3>
                <input type="hidden" name="question[]" value="{{$question->id}}">
                Answer :
                <textarea id="answer" rows="6" type="text" class="answerarea form-control @error('question') is-invalid @enderror" name="answer[]" value="{{ old('answer') }}" required  placeholder="Enter Details..."> </textarea>

            </div>

  @endforeach



 
  <div class="tab">
    <div class="row">
            <input type="radio" name="service_method" value="ONLINE" id="option-3" checked>
            <input type="radio" name="service_method" value="PHYSICAL" id="option-4">
            <label for="option-3" class="option option-3 col-sm-6">
                
            <img src="https://cdn.dribbble.com/users/3956332/screenshots/15304150/media/243feef68fd2e557dedf43fe92dcb529.jpg?compress=1&resize=400x300&vertical=top" alt="" class="img-optioin">

                <span style="padding-left:27vh">Online</span>
                </label>
            <label for="option-4" class="option option-4 col-sm-6">
            <img src="https://media.istockphoto.com/vectors/job-interview-vector-id1298405320?k=20&m=1298405320&s=612x612&w=0&h=PfKZV6qyGioiVHNzHWcJaDJFWN9KAM0SN2RXJrNs5ws=" class="img-optioin" alt="">

                <span style="padding-left:37vh">PHYSICAL</span>
            </label>
            
        </div>
  </div>
  <div class="tab">
    <h3>Remarks</h3>
  
  <textarea id="remarks" type="text" class="answerarea form-control @error('question') is-invalid @enderror" name="remarks" value="{{ old('remarks') }}" required autocomplete="remarks" autofocus></textarea>

  </div>
  <div class="tab">
  <input type="submit" style=" background-color: white;  color: black;  border: 2px solid #4CAF50;" value="Submit Your answers">
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="musicPlay();nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    @foreach ($questions as $question)
        <span class="step"></span>
    @endforeach
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>



           
                <!-- <form method="post" action="services/create">
                    @csrf

                    @foreach($questions as $datacart)
                        
                        <input type="text" name="quantity[]" value="{{$datacart->question}}">
                    @endforeach

                    <input type="submit" value="update">
                </form> -->
        </div>



@stop

<audio id="playAudio"  autoplay>
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
</script>


@section('scripts')
   <script src="{{ asset('js/partials.js') }}"></script>
@endsection