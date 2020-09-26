@extends('layouts.adminlayout')

@section('content')
<h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.products') }}"> Products</a></li>
                            <li class="breadcrumb-item active">{{ $product->productcode }}</li>
                            <li class="breadcrumb-item active">Features</li>
                        </ol>
<div class="container">
        <div class="">
            <h2>Product Features</h2>
            <hr>
            <x-alert />
        </div>
        <div class="row">
            @if (sizeof($images) == 0)
                <div class="card px-3 pt-2">
                    <p>This proudct has no image to show. Please upload images.</p>
                </div>
            @endif
            @foreach ($features as $feature)
                <div class="col-md-3 col-sm-4 py-2 text-center">
                    <span class="imgdlt rounded">
                        <a class="" style="color: red" href="" onclick="event.preventDefault();
                                        if(confirm('Are you sure to delete this feature?')){
                                            document.getElementById('form-deletefeature-{{ $feature->id }}')
                                            .submit()
                                        }"><i class="fa fa-trash"></i></a>
                                    <form style="display: none;" id="form-deletefeature-{{ $feature->id }}" method="POST" action="{{ route('admin.deleteproductfeature', $feature->id) }}">
                                        @csrf
                                        @method('delete')
                                    </form>
                    </span>
                    <table>

                    </table>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="row pt-3">
            <form action="{{ route('admin.addproductimage', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Choose an image to upload</label>
                    <div class="input-group">
                        <input class="form-control" type="file" name="image">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
