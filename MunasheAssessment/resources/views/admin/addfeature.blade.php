@extends('layouts.manageinput')
@section('content')
<form method="POST" action="{{route('admin/storefeature')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="menu_title" name="menu_title">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Heading</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="menu_heading" name="menu_heading">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="description" name="description">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Content Heading</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="content_heading" name="content_heading">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Content Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="content_description" name="content_description">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Toggleone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="toggleone" name="toggleone">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Toggleone Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="toggleone_desc" name="toggleone_desc">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Toggletwo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="toggletwo" name="toggletwo">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Toggleone Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="toggletwo_desc" name="toggletwo_desc">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Togglethree</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="togglethree" name="togglethree">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Togglethree Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="togglethree_desc" name="togglethree_desc">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Card1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cardone" name="cardone">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Card1 Desc</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cardone_desc" name="cardone_desc">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Card2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cardtwo" name="cardtwo">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Card2 Desc</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cardtwo_desc" name="cardtwo_desc">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Card3</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cardthree" name="cardthree">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Card3 Desc</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cardthree_desc" name="cardthree_desc">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Card4</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cardfour" name="cardfour">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Card4 Desc</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cardfour_desc" name="cardfour_desc">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Feature graphic</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="feature_graphic" name="feature_graphic">
        </div>
    </div>

    <div class="m-t-20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>


</form>
@endsection
