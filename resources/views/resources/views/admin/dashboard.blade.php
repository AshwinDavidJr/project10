@extends('template.app')
@section('head')
    @parent
@endsection

@section('body')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <div class="container-fluid">
                        <h3 class="text-dark mb-1 textalign:center">Dashboard</h3>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 text-center align-self-center mb-4">
                            <button class="btn btn-primary" type="button" onclick="window.location.href='dept'">Create
                                Department
                            </button>
                        </div>
                        <div class="col-md-6 col-xl-3 text-center align-self-center mb-4">
                            <button class="btn btn-primary" type="button" onclick="window.location.href='sem'">Create
                                Semester
                            </button>
                        </div>
                        <div class="col-md-6 col-xl-3 text-center align-self-center mb-4">
                            <button class="btn btn-primary" type="button" onclick="window.location.href='sub'">Create
                                Subject
                            </button>
                        </div>
                        <div class="col-md-6 col-xl-3 text-center align-self-center mb-4">
                            <button class="btn btn-primary" type="button" onclick="window.location.href='addstudent'">ADD STUDENTS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



@section('footer')
    @parent
@endsection
