@extends('layouts.adminlayout')
@section('content')
<h1 class="mt-4">Auto Code Generator</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"> <a href="{{ route('admin.autocodes') }}"> Auto codes</a></li>
    <li class="breadcrumb-item">Update Auto codes</li>
</ol>
<div class="container">
        <div class="header">
            <h2>Update Auto Code</h2>
            <hr>
            <x-alert />
        </div>
        <div class="" style="">
            <div class="col-xs-10">
                <form class="fluid" id="updateautocode" role="form" action="{{ route('admin.updateautocode',['code'=>$code->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group pb-4">
                        <label for="prefix">Prefix</label>
                        <input class="form-control " type="text" id="prefix" name="prefix" placeholder="" value="{{ $code->prefix }}" >
                    </div>
                    <div class="form-group pb-4">
                        <label for="inc">Suffix Increment</label>
                        <input class="form-control " type="number" id="inc" name="inc" placeholder="" value="{{ $code->inc }}" >
                    </div>
                    <div class="form-group pb-4">
                        <label for="suffix">Suffix</label>
                        <input class="form-control " type="number" id="suffix" name="suffix" placeholder="" value="{{ $code->suffix }}" >
                    </div>
                    <button class="form-control btn btn-primary" onClick="event.preventDefault();
                    if(confirm('This will affect upcoming products. Are you sure to change?')){
                        document.getElementById('updateautocode')
                        .submit()
                    }">
                        save
                    </button>
                </form>
            </div>
        </div>
</div>
@endsection
