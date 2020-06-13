@extends('template.app')
@section('head')
@parent
@endsection

@section('body')


<div class="container">
    <div class="card bg-light mt-3">
        <strong> NO STUDENT REVORDS WERE FOUND FOR THE GIVEN SEM </strong>
        <div class="card-header">
            ADD STUDENTS
        </div>
        <div class="card-body">

            <form action="{{ route('studentsubmit') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <input type="hidden" name="selection" value={{$selection ?? ''}}>
                <input type="file" name="file" class="form-control"  required>
                <br>
                <button class="btn btn-success">Add students</button>
                <a class="btn btn-warning" href="{{ route('viewstudent') }}">Download Students file</a>
            </form>
        </div>
    </div>
</div>

@endsection

@section("footer")
@parent
@endsection
