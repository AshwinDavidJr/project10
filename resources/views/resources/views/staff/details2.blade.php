@extends('template.app')
@section('head')
@parent
@endsection
@section('body')


  <table class="table-bordered table-striped" width=70%>
      <tr >
        <th colspan="2"> COURSE DETAILS</th>
      </tr>
      <tr>
          <th>COURSE CODE</th>
          <th>NAME</th>
      </tr>
      
      @foreach ($course as $c)
        <tr>
          <td>{{$c->subjectId}}</td>
          <td>{{$c->subjectName}}</td>
        </tr>
      @endforeach
  </table>
  <br><br>
  <form method="post" action="select2" enctype="multipart/form-data">
      <button name=action value="student">STUDENT DETAILS</button>
      <button name="action" value="course">COURSE DETAILS</button>
  </form>


@endsection
@section('footer')
@parent
@endsection