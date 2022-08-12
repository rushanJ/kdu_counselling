@extends('templates.layout')

@section('content')
   
<div class="row justify-content-center">
            
            <form method="post" action="create">
            @csrf
            <input type="hidden" name="counsellor" value="{{$id}}">
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