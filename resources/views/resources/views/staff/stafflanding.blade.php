@extends('template.app')
@section('head')
@parent
@endsection

@section('body')


<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Dashboard</h3>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Semester management</span></div>
                        </div>
                    <div class="col-auto"><button class="btn btn-primary" type="button" onclick="window.location.href='staffsel'">Click&nbsp;</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>advisor panel</span></div>
                        </div>
                        <div class="col-auto"><button class="btn btn-primary" type="button">Click</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Attendance entry</span></div>
                        </div>
                        <div class="col-auto"><button class="btn btn-primary" type="button">Click</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>STUDENT MANAGEMENT</span></div>
                        </div>
                        <div class="col-auto"><button class="btn btn-primary" type="button">Click</button></div>
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





