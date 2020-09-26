@extends('layouts.adminlayout')
@section('content')
    <h1 class="mt-4">Brands</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.brands') }}">Brands</a></li>
                            <li class="breadcrumb-item active">Add Brand</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>Add Brand</h2>
            <hr>
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <x-alert />
                <form class="fluid" role="form" action="{{ route('admin.newbrand') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-4">
                        <label for="brandname">Brand Name</label>
                        <input class="form-control " type="text" id="brandname" name="brandname" placeholder="" >
                    </div>
                    <div class="form-group pb-4">
                        <label class="" for="brandlogo">Logo</label>
                        <input class="form-control" type="file" name="brandlogo" >
                    </div>
                    <button class="form-control btn btn-primary" type="submit">save</button>
                </form>
            </div>
        </div>
</div>
@endsection
