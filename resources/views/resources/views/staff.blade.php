@extends('template.app')
@section('head')
@parent
@endsection

@section('body')


<div class="container-fluid">
    <div class="text-center mt-5">
        <div class="error mx-auto" data-text="404">
            <p class="m-0">404</p>
        </div>
        <p class="text-dark mb-5 lead">Staff Page</p>
        <p class="text-black-50 mb-0">You reached Staff Page...</p><a href="/home">← Back to Dashboard</a></div>
</div>


@endsection

@section('footer')
@parent
@endsection