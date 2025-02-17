@extends('layouts.manageinput')
@section('content')
<form method="POST" action="{{route('admin/storeabout')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Heading</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="heading" name="heading">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="description" name="description">
        </div>
    </div>
    <p>Select about items:</p>
    <div class="checkbox-group">
        <div class="row">
            <div class="col-md-6">
                <label class="checkbox-container">Lorem ipsum dolor sit amet
                    <input type="checkbox" name="itemone" value="Lorem ipsum dolor sit amet">
                    <span class="checkmark"></span>
                </label>
                <label class="checkbox-container">Consectetur adipiscing elit
                    <input type="checkbox" name="itemtwo" value="Consectetur adipiscing elit">
                    <span class="checkmark"></span>
                </label>
                <label class="checkbox-container">Sed do eiusmod tempor
                    <input type="checkbox" name="itemthree" value="Sed do eiusmod tempor">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="col-md-6">
                <label class="checkbox-container">Incididunt ut labore et
                    <input type="checkbox" name="itemfour" value="Dolore magna aliqua">
                    <span class="checkmark"></span>
                </label>
                <label class="checkbox-container">Dolore magna aliqua
                    <input type="checkbox" name="itemfive" value="Dolore magna aliqua">
                    <span class="checkmark"></span>
                </label>
                <label class="checkbox-container">Ut enim ad minim veniam
                    <input type="checkbox" name="itemsix" value="Ut enim ad minim veniam">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Leader name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="leader_name" name="leader_name">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Leader title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="leader_title" name="leader_title">
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Leader profile</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="leader_profile" name="leader_profile">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Call description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="call_description" name="call_description">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Phone number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>
    </div>

    <div class="m-t-20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection
