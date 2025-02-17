@extends('layouts.manageinput')
@section('content')
<form method="POST" action="{{route('admin/storetestimonial')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Person</label>
        <div class="col-sm-10">
            <input type="text" name="person" id="person" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Bio</label>
        <div class="col-sm-10">
            <input type="text" name="bio" id="bio" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Comment</label>
        <div class="col-sm-10">
            <input type="text" name="comment" id="comment" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Profile</label>
        <div class="col-sm-10">
            <input type="file" name="graphic" id="graphic" class="form-control">
        </div>
    </div>

    <div class="m-t-20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection

