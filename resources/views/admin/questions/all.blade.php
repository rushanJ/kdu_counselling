@extends('admin.templates.layout')

@section('content')
   
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <h6>Admin -> Dashboard -> Questions<h6>
    <h3>Questions</h3>
    <a href="questions/create" type="button" class="btn btn-outline-primary">+</a>



            <table class="table">
            <thead class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">
                <tr>
           
                <td>Id</td>
                <td>Question</td>
            
                <td></td>

                </tr>
                </thead>
            <tbody>
                @foreach ($questions as $question)
                <tr>
                <td>{{ $question->id }}</td>
                <td>{{ $question->question }}</td>
              
                <td>   
                     <a href='questions/edit/{{ $question->id }}' type="button" class="btn btn-outline-primary"><span class="material-icons">edit</span></a>
                     <a href='questions/view/{{ $question->id }}' type="button" class="btn btn-outline-primary"><span class="material-icons">visibility</span></a>
                     <a href='questions/delete/{{ $question->id }}' type="button" class="btn btn-outline-primary"><span class="material-icons"> delete </span></a>
                </td>



                </tr>
                @endforeach
            </tbody>
            </table>



                </div>
    <!-- Testimonial End -->

@stop
