@extends('admin.templates.layout')

@section('content')
   
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <h6>Admin -> Dashboard -> Student<h6>
    <h3>Student</h3>
    <a href="user/create" type="button" class="btn btn-outline-primary">+</a>



            <table class="table">
            <thead class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                <tr>
                <td>Employee No</td>
                <td>NIC</td>
                <td> First Name</td>
                <td>Middle Name</td>
                <td>Last Name</td>
                <td>Address</td>

                <td>Faculty</td>
                <td>Department</td>
                <td>Batch</td>
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
                <td>{{ $user->m_name }}</td>
                <td>{{ $user->l_name }}</td>
                <td>{{ $user->address }}</td>

                <td>{{ $user->faculty }}</td>
                <td>{{ $user->department }}</td>
                <td>{{ $user->batch }}</td>

                <td>{{ $user->gender }}</td>
                <td>{{ $user->phone }}</td>
                <td>   
                     <a href='user/edit/{{ $user->user_id }}' type="button" class="btn btn-outline-primary"><span class="material-icons">edit</span></a>
                     <a href='user/view/{{ $user->user_id }}' type="button" class="btn btn-outline-primary"><span class="material-icons">visibility</span></a>
                     <a href='user/delete/{{ $user->user_id }}' type="button" class="btn btn-outline-primary"><span class="material-icons"> delete </span></a>
                </td>



                </tr>
                @endforeach
            </tbody>
            </table>



                </div>
    <!-- Testimonial End -->

@stop
