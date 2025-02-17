@extends('layouts.manageinput')
@section('content')
<form method="POST" action="{{route('admin/storeservice')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Services Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Services Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="service_desc" name="service_desc">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Services 1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="serviceone" name="serviceone">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Services 2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="servicetwo" name="servicetwo">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Service 3</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="servicethree" name="servicethree">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Services 4</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="servicefour" name="servicefour">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Button name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="button_name" name="button_name">
        </div>
    </div>
    <div class="m-t-20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection
