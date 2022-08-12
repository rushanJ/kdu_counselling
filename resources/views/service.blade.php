@extends('templates.layout')

@section('content')
   
<div class="row justify-content-center">
            <!-- <div class="col-11 col-sm-9 col-md-7 
                col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="px-0 pt-4 pb-0 mt-3 mb-3">
                    <form id="form">
                        <ul id="progressbar">
                            <li class="active" id="step1">
                                <strong>Step 1</strong>
                            </li>
                            <li id="step2"><strong>Step 2</strong></li>
                            <li id="step3"><strong>Step 3</strong></li>
                            <li id="step4"><strong>Step 4</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar"></div>
                        </div> <br>
                        <fieldset>
                            <h2>Welcome To GFG Step 1</h2>
                            <input type="button" name="next-step" 
                                class="next-step" value="Next Step" />
                        </fieldset>
                        <fieldset>
                            <h2>Welcome To GFG Step 2</h2>
                            <input type="button" name="next-step" 
                                class="next-step" value="Next Step" />
                            <input type="button" name="previous-step" 
                                class="previous-step" 
                                value="Previous Step" />
                        </fieldset>
                        <fieldset>
                            <h2>Welcome To GFG Step 3</h2>
                            <input type="button" name="next-step" 
                                class="next-step" value="Final Step" />
                            <input type="button" name="previous-step" 
                                class="previous-step" 
                                value="Previous Step" />
                        </fieldset>
                        <fieldset>
                            <div class="finish">
                                <h2 class="text text-center">
                                    <strong>FINISHED</strong>
                                </h2>
                            </div>
                            <input type="button" name="previous-step" 
                                class="previous-step" 
                                value="Previous Step" />
                        </fieldset>
                    </form>
                </div>
            </div> -->
            <form method="post" action="services/create">
            @csrf

            <fieldset>
               

                <div>
                <input type="radio" id="annonimous" name="relationship" value="ANNONIMOUS" />
                      
                <label for="huey">Annonimous</label>
                </div>

                <div>
                <input type="radio" id="open" name="relationship" value="OPEN">
                <label for="dewey">Open</label>
                </div>

               
            </fieldset>

            @foreach ($questions as $question)
                <tr>
                
                <td>{{ $question->question }}</td>
              
                <input type="text" name="question[]" value="{{$question->id}}">
                <textarea id="answer" type="text" class="form-control @error('question') is-invalid @enderror" name="answer[]" value="{{ old('answer') }}" required autocomplete="answer" autofocus></textarea>


                </tr>
                @endforeach

                <!-- <input type="text" name="service_method" > -->

                <fieldset>
                <legend>Select a maintenance drone:</legend>

                <div>
                <input type="radio" id="online" name="service_method" value="ONLINE" />
                      
                <label for="huey">Online</label>
                </div>

                <div>
                <input type="radio" id="physical" name="service_method" value="PHYSICAL">
                <label for="dewey">Physical</label>
                </div>

               
            </fieldset>
                <textarea id="remarks" type="text" class="form-control @error('question') is-invalid @enderror" name="remarks" value="{{ old('remarks') }}" required autocomplete="remarks" autofocus></textarea>


                    <input type="submit" value="update">

                </form>
                <!-- <form method="post" action="services/create">
                    @csrf

                    @foreach($questions as $datacart)
                        
                        <input type="text" name="quantity[]" value="{{$datacart->question}}">
                    @endforeach

                    <input type="submit" value="update">
                </form> -->
        </div>



@stop

@section('scripts')
   <script src="{{ asset('js/partials.js') }}"></script>
@endsection