@extends('layouts.manageinput')
@section('content')
<form method="POST" action="{{route('admin/storepricing')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"> Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="menu_title">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Price title Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="menu_desc" name="menu_desc">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Plan name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" name="plan_name">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" name="price">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Desc</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" name="desc">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Feature title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" name="feature_title">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Feature one</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" name="featureone">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Feature two</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" name="featuretwo">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Feature three</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" name="featurethree">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Feature four</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="" name="featurefour">
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
