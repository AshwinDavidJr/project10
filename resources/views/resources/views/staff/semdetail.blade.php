@extends('template.app')
@section('head')
@parent
@endsection

@section('body')


<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="text-primary font-weight-bold m-0">Subjects</h6>
        </div>
        <ul class="list-group list-group-flush">
            @if (count($subs->subject)<1)
            <li class="list-group-item">
                <div class="row align-items-center no-gutters">
                    <strong>No Subjects Registered</strong>
                </div>
            </li>
            @else
                @foreach ($subs->subject as $sub)
                <li class="list-group-item">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <h6 class="mb-0"><strong>{{$sub->subjectName}}</strong></h6><span class="text-xs">{{$sub->subjectId}}</span></div>
                    </div>
                </li>  
                @endforeach
            @endif
            
            
        </ul>
    </div>
</div>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="text-primary font-weight-bold m-0">Students</h6>
        </div>
        <ul class="list-group list-group-flush">
            
            @if (count($subs->student)<1)
            <li class="list-group-item">
                <div class="row align-items-center no-gutters">
                    <strong>No Students Registered</strong>
                </div>
            </li>
            @else
                @foreach ($subs->student as $student)
                    <li class="list-group-item">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <h6 class="mb-0"><strong>{{$student->name}}</strong></h6><span class="text-xs">{{$student->id}}</span></div>
                        </div>
                    </li>
                @endforeach
            @endif
            
        </ul>
    </div>
</div>


@endsection

@section('footer')
@parent
@endsection

