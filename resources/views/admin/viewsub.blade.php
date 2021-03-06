@extends('template.app')
@section('head')
@parent
@endsection

@section('body')


<h3 class="text-dark mb-4">Dashboard</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">{{$subs->semesterName ?? ''}}<button class="btn btn-primary" type="button" style="  margin-left: 1000px;
                margin-right: 0px;
            " onclick="window.location.href='{{ url()->previous() }}'">Back</button></p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Subject Code</th>
                            <th>Subject ID</th>
                            <th>Subject Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subs->subject as $sub)
                            <tr>
                                <td>{{$sub->subjectId}}</td>
                                <td>{{$sub->semesterId}}</td>
                                <td>{{$sub->subjectName}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

@section('footer')
@parent
@endsection
