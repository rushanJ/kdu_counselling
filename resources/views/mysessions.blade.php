@extends('templates.layout')

@section('content')
   
<div class="row justify-content-center">





<table class="table">
                <thead class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                    <tr>
                    <td>id</td>
                    <td>Student</td>
                    <td>Counsellor</td>
                    <td>Problem Type</td>
                    <td>Service Method</td>
                    
                    <td>remarks</td>

                
                    <td></td>

                    </tr>
                    </thead>
                <tbody>
                    @foreach ($session_requests as $session_request)
                    <tr>
                
                    <td>{{ $session_request->id }}</td>
                    <td>{{ $session_request->student_name }}</td>
                    <td>{{ $session_request->counsellor_name }}</td>
                    <td>{{ $session_request->problem_type }}</td>
                    <td>{{ $session_request->service_method }}</td>
                    <td>{{ $session_request->remarks }}</td>

            
                    <td>   
                        <a href='mysessions/{{ $session_request->id }}' type="button" class="btn btn-outline-primary"><span class="material-icons">visibility</span></a>
                    </td>



                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>



@stop

@section('scripts')
   <script src="{{ asset('js/partials.js') }}"></script>
@endsection