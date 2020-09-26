@extends('layouts.adminlayout')
@section('content')
 <h1 class="mt-4">Categories</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.categories') }}">Categories</a></li>
                            <li class="breadcrumb-item">{{ $cat->catname }}</li>
                            <li class="breadcrumb-item active">Edit Category</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>Edit Category</h2>
            <hr>
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <x-alert />
                <form class="fluid" role="form" action="{{ route('admin.updatecategory',['cat'=>$cat->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group pb-4">
                        <label for="catname">Category Name</label>
                        <input class="form-control " type="text" id="catname" name="catname" placeholder="" value="{{ $cat->catname }}" >
                    </div>
                    <div class="form-group pb-4">
                        <label class="" for="catlogo">Logo</label>
                        <div>
                            <img src="{{ asset($cat->catlogo) }}" alt="{{ $cat->catname }}" class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                        </div>
                        <input class="form-control" type="file" name="catlogo">
                    </div>
                    <button class="form-control btn btn-primary" type="submit">save</button>
                </form>
            </div>
        </div>
</div>
@endsection
