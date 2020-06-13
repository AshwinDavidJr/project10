@extends('template.app')
@section('head')
@parent
@endsection

@section('body')


<div class="container-fluid">
    <h3 class="text-dark mb-1">Semester Creation</h3>
</div>
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="semsubmit" method="POST">
                <div class="form-group"><label>Department</label>
                    <select class="form-control" name="dept">
                        <optgroup label="Departments">
                            <option value="" disabled selected="">Select one</option>
                            @if ($depts)
                                @foreach ($depts as $deptd)
                                    <option value="{{$deptd->departmentId}}">{{$deptd->departmentName}}</option>
                                @endforeach
                            @endif
                            
                        </optgroup>
                    </select>
                </div>
                <div class="form-group"><label>Academic Year</label>
                    <select class="form-control"  name="year">
                        <optgroup label="This is a group">
                            <option value="2020" selected="">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group"><label>Semester&nbsp;</label>
                    <select class="form-control" name="sem">
                        <optgroup label="This is a group">
                            <option value="S1" selected="">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            <option value="S4">S4</option>
                            <option value="S5">S5</option>
                            <option value="S6">S6</option>
                            <option value="S7">S7</option>
                            <option value="S8">S8</option>

                        </optgroup>
                    </select>
                </div>
                @csrf
                <div role="group" class="btn-group"><button class="btn btn-primary" type="submit">Create Semester</button></div>
            </form>
        </div>
</div>
</div>


@endsection

@section('footer')
@parent
@endsection