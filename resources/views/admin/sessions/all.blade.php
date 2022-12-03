@extends('admin.templates.layout')

@section('content')
   
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <h6>Admin -> Dashboard -> Session Request<h6>
    <h3>Session Request</h3>



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
                    <td>@if(! $session_request->is_anonnimus )         
                            {{ $session_request->student_name }}    
                    @else
                        Anonymous Student
                    @endif
</td>
                    <td>{{ $session_request->counsellor_name }}</td>
                    <td>{{ $session_request->problem_type }}</td>
                    <td>{{ $session_request->service_method }}</td>
                    <td>{{ $session_request->remarks }}</td>

            
                    <td>   
                        <a href='sessions/view/{{ $session_request->id }}' type="button" class="btn btn-outline-primary"><span class="material-icons">visibility</span></a>
                    </td>



                    </tr>
                    @endforeach
                </tbody>
            </table>



                </div>
    <!-- Testimonial End -->

@stop
