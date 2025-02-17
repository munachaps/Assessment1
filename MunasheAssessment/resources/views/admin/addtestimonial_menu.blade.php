@extends('layouts.manageinput')
@section('content')
<form method="POST" action="{{route('admin/storemenu')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Menu title</label>
        <div class="col-sm-10">
            <input type="text" name="menu_title" id="menu_title" class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Menu header</label>
        <div class="col-sm-10">
            <input type="text" name="menu_heading" id="menu_heading" class="form-control">
        </div>
    </div>

    <div class="m-t-20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection

