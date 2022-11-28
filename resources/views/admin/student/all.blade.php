@extends('admin.templates.layout')

@section('content')
   
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <h6>Admin -> Dashboard -> Student<h6>
    <h3>Student</h3>
    <a href="student/create" type="button" class="btn btn-outline-primary">+</a>



            <table class="table">
            <thead class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                <tr>
                <td>Student number </td>
                <td>Rank</td>
                <td> First Name</td>
               
                <td>Last Name</td>
                

                <td>Faculty</td>
                <td>Department</td>
                <td>Intake</td>
                <td>Gender</td>
                <td>Phone</td>
                <td></td>

                </tr>
                </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                <!-- <td>{{ $user->id }}</td> -->
                <td>{{ $user->emp_no_student_no }}</td>
                <td>{{ $user->nic }}</td>
                <td>{{ $user->f_name }}</td>
            
                <td>{{ $user->l_name }}</td>
             

                <td>{{ $user->faculty }}</td>
                <td>{{ $user->department }}</td>
                <td>{{ $user->batch }}</td>

                <td>{{ $user->gender }}</td>
                <td>{{ $user->phone }}</td>
                <td>   
                     <a href='student/edit/{{ $user->user_id }}' type="button" class="btn btn-outline-primary"><span class="material-icons">edit</span></a>
                     <a href='student/view/{{ $user->user_id }}' type="button" class="btn btn-outline-primary"><span class="material-icons">visibility</span></a>
                     <a href='student/delete/{{ $user->user_id }}' type="button" class="btn btn-outline-primary"><span class="material-icons"> delete </span></a>
                </td>



                </tr>
                @endforeach
            </tbody>
            </table>



                </div>
    <!-- Testimonial End -->

@stop
