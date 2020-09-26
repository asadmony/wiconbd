@extends('layouts.adminlayout')
@section('content')
    <h1 class="mt-4">Categories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.categories') }}">Categories</a></li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>Add Category</h2>
            <hr>
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <x-alert />
                <form class="fluid" role="form" action="{{ route('admin.newcategory') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-4">
                        <label for="catname">Category Name</label>
                        <input class="form-control " type="text" id="catname" name="catname" placeholder="" >
                    </div>
                    <div class="form-group pb-4">
                        <label class="" for="catlogo">Logo</label>
                        <input class="form-control" type="file" name="catlogo" >
                    </div>
                    <button class="form-control btn btn-primary" type="submit">save</button>
                </form>
            </div>
        </div>
</div>
@endsection
