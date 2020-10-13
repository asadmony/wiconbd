@extends('layouts.adminlayout')
@section('content')
 <h1 class="mt-4">About Us</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.abouts') }}">About us</a></li>
                            <li class="breadcrumb-item active">Edit </li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>Edit About Us Page</h2>
            <hr>
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <x-alert />
                <form class="fluid" role="form" action="{{ route('admin.updateabout',$about->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group pb-4">
                        <label for="companyProfile">Company profile</label>
                        <textarea class="form-control " type="text" id="companyProfile" name="companyProfile" >{{ $about->companyProfile }}</textarea>
                    </div>
                    <div class="form-group pb-4">
                        <label for="mission">Mission</label>
                        <textarea class="form-control " type="text" id="mission" name="mission" >{{ $about->mission }}</textarea>
                    </div>
                    <div class="form-group pb-4">
                        <label for="vision">Vision</label>
                        <textarea class="form-control " type="text" id="vision" name="vision" >{{ $about->vision }}</textarea>
                    </div>
                    <button class="form-control btn btn-primary" type="submit">save</button>
                </form>
            </div>
        </div>
</div>
@endsection
