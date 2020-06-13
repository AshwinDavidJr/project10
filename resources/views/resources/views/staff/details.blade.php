@extends('template.app')
@section('head')
@parent
@endsection
@section('body')


  <table class="table-bordered table-striped" width=70%>
      <tr >
        <th colspan="2"> STUDENT DETAILS</th>
      </tr>
      <tr>
          <th>REGISTRATION No.</th>
          <th>NAME</th>
      </tr>
      
      @foreach ($stud as $s)
        <tr>
          <td>{{$s->id}}</td>
          <td>{{$s->name}}</td>
        </tr>
      @endforeach
  </table>
  <br><br>
  <form method="post" action="select2" enctype="multipart/form-data">
      <button name=action value="course">STUDENT DETAILS</button>
      @csrf
      <button name="action" value="course">COURSE DETAILS</button>
  </form>



@endsection
@section('footer')
@parent
@endsection
