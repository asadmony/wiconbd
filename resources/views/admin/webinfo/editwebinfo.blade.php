@extends('layouts.adminlayout')
@section('content')
 <h1 class="mt-4">Website Informations</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.webinfos') }}">Informations</a></li>
                            <li class="breadcrumb-item active">Edit </li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>Edit Informations</h2>
            <hr>
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <x-alert />
                <form class="fluid" role="form" action="{{ route('admin.updatewebinfo', $webinfo->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group pb-4">
                        <label for="footerDesc">Footer Description</label>
                        <textarea class="form-control " type="text" id="footerDesc" name="footerDesc" >{{ $webinfo->footerDesc }}</textarea>
                    </div>
                    <div class="form-group pb-4">
                        <label for="contactDesc">Contact Us Description</label>
                        <textarea class="form-control " type="text" id="contactDesc" name="contactDesc" >{{ $webinfo->contactDesc }}</textarea>
                    </div>
                    <div class="form-group pb-4">
                        <label for="address">Company Address</label>
                        <textarea class="form-control " type="text" id="address" name="address" >{{ $webinfo->address }}</textarea>
                    </div>
                    <div class="form-group pb-4">
                        <label for="gmapiframe">Address iframe link from Google Map</label>
                        <textarea class="form-control " type="text" id="gmapiframe" name="gmapiframe" >{{ $webinfo->gmapiframe }}</textarea>
                    </div>
                    <div class="form-group pb-4">
                        <label for="email">Company Email</label>
                        <input class="form-control " type="text" id="email" name="email" value="{{ $webinfo->email }}">
                    </div>
                    <div class="form-group pb-4">
                        <label for="mobile">Phone</label>
                        <input class="form-control " type="text" id="mobile" name="mobile" value="{{ $webinfo->mobile }}">
                    </div>
                    <div class="form-group pb-4">
                        <label for="facebook">Facebook link</label>
                        <input class="form-control " type="text" id="facebook" name="facebook" value="{{ $webinfo->facebook }}">
                    </div>
                    <div class="form-group pb-4">
                        <label for="twitter">Twitter link</label>
                        <input class="form-control " type="text" id="twitter" name="twitter" value="{{ $webinfo->twitter }}">
                    </div>
                    <div class="form-group pb-4">
                        <label for="instagram">Instagram link</label>
                        <input class="form-control " type="text" id="instagram" name="instagram" value="{{ $webinfo->instagram }}">
                    </div>
                    <div class="form-group pb-4">
                        <label for="whatsapp">Whatsapp Number</label>
                        <input class="form-control " type="text" id="whatsapp" name="whatsapp" value="{{ $webinfo->whatsapp }}">
                    </div>
                    <button class="form-control btn btn-primary" type="submit">save</button>
                </form>
            </div>
        </div>
</div>
@endsection
