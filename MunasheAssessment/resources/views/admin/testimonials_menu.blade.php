@extends('layouts.manageinput')
@section('content')
<form method="POST" action="{{route('admin/storemenu')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="menu_title" name="menu_title">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Menu heading</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="menu_heading" name="menu_heading">
        </div>
    </div>

    <div class="m-t-20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection

