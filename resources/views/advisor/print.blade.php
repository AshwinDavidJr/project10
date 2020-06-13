@extends('template.app')
@section('head')
@parent
@endsection
@section('body')

<strong> STUDENT RECORDS ALREADY EXISTS FOR THE GIVEN SEM</strong>
<br><br>

<a href="" class="btn btn-danger">UPDATE</a><br> <br> <br>
   <table class="table-bordered table-striped" width=70%>
       <tr>
           <th>ID</th>
           <th>NAME</th>

       </tr>
       @foreach ($sems as $c)
       <tr>
       <td>{{$c->studentId}}</td>
       <td>{{$c->name}}</td>
       </tr>

       @endforeach

    </table>



@endsection
@section('footer')
@parent
@endsection
