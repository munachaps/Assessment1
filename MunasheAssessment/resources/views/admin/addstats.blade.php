@extends('layouts.manageinput')
@section('content')
<form method="POST" action="{{route('admin/storestat')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="description">
        </div>
    </div>
    <div class="m-t-20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection
