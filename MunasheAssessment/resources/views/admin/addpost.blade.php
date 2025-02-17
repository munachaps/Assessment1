@extends('layouts.manageinput')
@section('content')
<form method="POST" action="{{route('admin/storebanner')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Upper section</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="upper_section" name="upper_section">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Heading</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="heading" name="heading">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Banner Image</label>
        <div class="col-sm-10">
            <input type="file" name="banner_image" id="banner_image" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea rows="5" cols="5" name="description" id="description" class="form-control" placeholder="Default textarea"></textarea>
        </div>
    </div>

    <div class="m-t-20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection
