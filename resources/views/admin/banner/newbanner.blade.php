@extends('layouts.adminlayout')
@section('content')
    <h1 class="mt-4">Banners</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.sliders') }}">Banners</a></li>
                            <li class="breadcrumb-item active">Add Banner</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>Add Banner</h2>
            <hr>
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <x-alert />
                <form class="fluid" role="form" action="{{ route('admin.newbanner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-4">
                        <label class="" for="image">Banner Image</label>
                        <input class="form-control" type="file" name="image" >
                    </div>
                    <div class="form-group pb-4">
                        <label for="link">Banner Link (optional)</label>
                        <input class="form-control " type="text" id="link" name="link" placeholder="http://example.com/element" >
                    </div>
                    <button class="form-control btn btn-primary" type="submit">save</button>
                </form>
            </div>
        </div>
</div>
@endsection
