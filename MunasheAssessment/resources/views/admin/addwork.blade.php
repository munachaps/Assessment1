@extends('layouts.manageinput')
@section('content')
<form method="POST" action="{{route('admin/storeworks')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Work done</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="work_done" name="work_done">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Value</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="value" name="value">
        </div>
    </div>
    <div class="m-t-20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection
