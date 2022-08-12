@extends('admin.templates.layout')

@section('content')
   
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
<table border = "1">
<tr>
<td>Id</td>
<td> Name</td>
<td>Email</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
</tr>
@endforeach
</table>



    </div>
    <!-- Testimonial End -->

@stop
