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
                    url: "semchk",
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
    <h3 class="text-dark mb-1">View Semester</h3>
</div>
<div class="container">
    <div class="card">
        <div class="card-body" style="padding-bottom: 20px;margin-bottom: 0px;">
            <form action="stafftest" method="POST">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="form-group"><label>Department</label>
                    <select class="form-control" name="dept" id="deptid">
                        <optgroup label="Departments">
                            <option value="" disabled selected="">Select one</option>
                            @if ($semlist)
                                @foreach ($semlist as $sem)
                                    <option value="{{$sem->departmentId}}">{{$sem->departmentName}}</option>
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
        
    <div class="form-group"><button class="btn btn-primary" type="submit">View</button></div>
    @csrf
    </form>
    
</div>
</div>
</div>





@endsection

@section('footer')
@parent
@endsection
