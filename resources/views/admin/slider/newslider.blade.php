@extends('layouts.adminlayout')
@section('content')
    <h1 class="mt-4">Sliders</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.sliders') }}">Sliders</a></li>
                            <li class="breadcrumb-item active">Add Slider</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>Add Slider</h2>
            <hr>
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <x-alert />
                <form class="fluid" role="form" action="{{ route('admin.newslider') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-4">
                        <label for="title">Slider Title</label>
                        <input class="form-control " type="text" id="title" name="title" placeholder="" >
                    </div>
                    <div class="form-group pb-4">
                        <label for="details">Slider Details</label>
                        <textarea class="form-control " type="text" id="details" name="details" placeholder="" ></textarea>
                    </div>
                    <div class="form-group form-inline pb-4">
                        <input class="form-control" type="checkbox" id="button" name="button" value="1" >
                        <label style="padding-left: 10px" for="button">Slider Button (check if you want to add a button)</label>
                    </div>
                    <div class="form-group pb-4">
                        <label for="buttonname">Button Name</label>
                        <input class="form-control " type="text" id="buttonname" name="buttonname" placeholder="Click here" >
                    </div>
                    <div class="form-group pb-4">
                        <label for="buttonlink">Button Link</label>
                        <input class="form-control " type="text" id="buttonlink" name="buttonlink" placeholder="example.com/element" >
                    </div>
                    <div class="form-group pb-4">
                        <label class="" for="image">Slider Image</label>
                        <input class="form-control" type="file" name="image" >
                    </div>
                    <button class="form-control btn btn-primary" type="submit">save</button>
                </form>
            </div>
        </div>
</div>
@endsection
