@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @php
                    $productcount = App\Product::count();
                @endphp
                <div class="card-body">
                    Total Products: {{ $productcount }}
                </div>
                @php
                    $categorycount = App\Category::count();
                @endphp
                <div class="card-body">
                    Total Categories: {{ $categorycount }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
