@extends('template.app')
@section('head')
@parent
@endsection

@section('body')
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Semester:
        <form method='POST' action="check" class='form-control' enctype="multipart/form-data">

            @csrf
	Semester:
                <select name="listsem">
                    <optgroup label="Select Semester">

                        <option value=S1 selected >1</option>
                        <option value=S2>2</option>
                        <option value=S3>3</option>
                        <option value=S4>4</option>
                        <option value=S5>5</option>
                        <option value=S6>6</option>
                        <option value=S7>7</option>
                        <option value=S8>8</option>
                    </optgroup>

                </select>

                <br><br><br>
		<button class="btn btn-success" > GO </button>
	</form>
        </div>
    </div>
</div>





@endsection

@section('footer')
@parent
@endsection
