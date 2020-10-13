@extends('layouts.adminlayout')
@section('content')
    <h1 class="mt-4">Showrooms & DealerShops</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.showrooms') }}">Showrooms</a></li>
                            <li class="breadcrumb-item active">Add Showroom</li>
                        </ol>
<div class="container">
        <div class="header">
            <h2>Add Showroom</h2>
            <hr>
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <x-alert />
                <form class="fluid" role="form" action="{{ route('admin.newshowroom') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-4">
                        <label for="title">Showroom Title</label>
                        <input class="form-control " type="text" id="title" name="title" placeholder="" >
                    </div>
                    <div class="form-group pb-4">
                        <label for="name">Showroom Name</label>
                        <input class="form-control " type="text" id="name" name="name" placeholder="" >
                    </div>
                    <div class="form-group pb-4">
                        <label for="address">Showroom Address</label>
                        <textarea class="form-control " type="text" id="address" name="address" placeholder="" ></textarea>
                    </div>
                    <div class="form-group pb-4">
                        <label for="phone">Showroom Phone no.</label>
                        <input class="form-control " type="text" id="phone" name="phone" placeholder="" >
                    </div>
                    <button class="form-control btn btn-primary" type="submit">save</button>
                </form>
            </div>
        </div>
</div>
@endsection
