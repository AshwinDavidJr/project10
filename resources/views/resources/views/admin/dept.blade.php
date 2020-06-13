@extends('template.app')
@section('head')
    @parent
@endsection

@section('body')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2><strong>Department Creation</strong></h2>
                <hr/>
                <form action="deptsubmit" method="POST">
                    <div class="form-group"><label>Department Name</label><input type="text" name="dept_name" class="form-control"/></div>
                    <div class="form-group"><label>Department Code</label><input type="text" name="dept_id" class="form-control"/></div>
                    @csrf
                    <div role="group" class="btn-group">
                        <button class="btn btn-primary" type="submit">Create Department</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@section('footer')
    @parent
@endsection
