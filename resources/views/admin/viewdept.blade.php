@extends('template.app')
@section('head')
@parent
@endsection

@section('body')


<h3 class="text-dark mb-4">Data Manager</h3>
    <div class="card shadow">
        <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Departments</p>
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
                            <th>Dept Name</th>
                            <th>ID</th>
                            <th>HOD</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($depts as $dept)
                            <tr>
                            <td><a href="/viewsem{{Crypt::encrypt($dept->departmentId)}}">{{$dept->departmentName}}</a></td>
                                <td>{{$dept->departmentId}}</td>
                                <td>{{$dept->hod}}</td>
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
