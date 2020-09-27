@extends('layouts.adminlayout')
@section('content')
 <h1 class="mt-4">Banners</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.banners') }}">Banners</a></li>
                            <li class="breadcrumb-item active">Edit Banner</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>Edit Banner</h2>
            <hr>
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <x-alert />
                <form class="fluid" role="form" action="{{ route('admin.updatebanner',['banner'=>$banner->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group pb-4">
                        <label for="link">Banner Link (optional)</label>
                        <input class="form-control " type="text" id="link" name="link" placeholder="http://example.com/element" value="{{ $banner->link }}" >
                    </div>
                    <div class="form-group pb-4">
                        <label class="" for="image">banner Image</label>
                        <div>
                            <img src="{{ asset($banner->image) }}" class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                        </div>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <button class="form-control btn btn-primary" type="submit">save</button>
                </form>
            </div>
        </div>
</div>
@endsection
