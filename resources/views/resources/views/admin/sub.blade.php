@extends('template.app')
@section('head')
@parent
@endsection

@section('body')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        
        $("#deptid").change(function(){
            
            var deptget=$("#deptid").val();      
            
            
            $.ajax({
                    type: "POST",
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "deptchk",
                    data: {// change data to this object
                        _token : $('meta[name="csrf-token"]').attr('content'),
                        data:deptget 
                        
                    },
                    dataType: "text",
                    success: function(resultData) { 
                        $("#semid").html(resultData);
                        
                        }
                });
        });
       
    });
    
</script>


<div class="container-fluid">
    <h3 class="text-dark mb-1">Subject Creation</h3>
</div>
<div class="container">
    <div class="card">
        <div class="card-body" style="padding-bottom: 20px;margin-bottom: 0px;">
            <form action="subsubmit" method="POST">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="form-group"><label>Department</label>
                    <select class="form-control" name="dept" id="deptid">
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
                <div
                    class="form-group"><label>Semester</label>
                    <select class="form-control" name="semid" id="semid">    
                        <option value="">Select a Semester</option>
                    </select></div>
        <div
            class="form-group"><label>Subject Code</label><input class="form-control" type="text" name="subcode"></div>
    <div class="form-group"><label>Subject Name</label><input class="form-control" type="text" name="subname"></div>
    <div class="form-group"><button class="btn btn-primary" type="submit">Create Subject</button></div>
    @csrf
    </form>
    
</div>
</div>
</div>





@endsection

@section('footer')
@parent
@endsection