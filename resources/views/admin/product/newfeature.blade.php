@extends('layouts.adminlayout')

@section('content')
<h1 class="mt-4">Features</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"> <a href="{{ route('admin.products') }}"> Products</a></li>
                            <li class="breadcrumb-item active">{{ $product->productcode }}</li>
                            <li class="breadcrumb-item active">Features</li>
                        </ol>
<div class="container">
        <div class="">
            <h2>Add Features</h2>
            <hr>
            <x-alert />
        </div>

        <div class="container pt-3">
            <form action="{{ route('admin.addproductfeature', $product->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <label class="pr-1" for="featurename-1">Feature name 1: </label>
                        <input class="form-control" type="text" id="featurename-1" name="featurename-1" placeholder="ex.: Model">
                    </div>
                    <div class="input-group pt-2">
                        <label class="pr-1" for="featurevalue-1">Feature value 1: </label>
                        <textarea class="form-control" type="text" id="featurevalue-1" name="featurevalue-1" placeholder="ex.: Galaxy S10"></textarea>
                    </div>
                    <hr>
                </div>
                <div id="morefield" class="form-group">
                    {{-- data will come from js --}}
                </div>
                <div id="totfield" class="form-group">
                    <input type="hidden" name="totinput" value="1">
                </div>
                <div class="form-group">
                    <a class="btn border" href="" onclick="event.preventDefault();addfield()">+ add more feature field</a>
                </div>
                <div class="form-group">
                    <button class="btn form-control btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        var i = 1;
        console.log('ok');
        function addfield(){
            i++;
            var data = '<div class="form-group">'+
                    '<div class="input-group">'+
                    '<label class="pr-1" for="featurename-'+i+'">Feature name '+i+': </label>'+
                        '<input class="form-control" type="text" id="featurename-'+i+'" name="featurename-'+i+'">'+
                    '</div>'+
                    '<div class="input-group pt-2">'+
                    '<label class="pr-1" for="featurevalue-'+i+'">Feature value '+i+': </label>'+
                        '<textarea class="form-control" type="text" id="featurevalue-'+i+'" name="featurevalue-'+i+'"></textarea>'+
                    '</div>'+
                    '<hr>'+
                '</div>';
        $("#morefield").append(data);
        var tot = '<input type="hidden" name="totinput" value="'+i+'">';
        $("#totfield").html(tot);
        }
        </script>
@endsection
