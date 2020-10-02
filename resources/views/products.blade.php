@extends('layouts.app')

@section('content')


    <!--  =================================
                Products Part start
          ==================================  -->
    <section id="products-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="products-header">
                        <h3>Our Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    @if ($banners)
                    <div class="prduct-banner">
                        @foreach ($banners as $banner)
                        <div class="prdct-img-1">
                            <img src="{{ asset($banner->image) }}" alt="777">
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="products-name-header">
                        <h3> <strong>Wicon</strong> Premium</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Sort By</span>
                        </div>
                        <select id="input-sort" class="form-control">
                                <option value="Default" selected="selected">Default</option>
                                <option value="name">Name (A - Z)</option>
                                <option value="name">Name (Z - A)</option>
                                <option value="price">Price (Low &gt; High)</option>
                                <option value="price">Price (High &gt; Low)</option>
                                <option value="model">Model (A - Z)</option>
                                <option value="model">Model (Z - A)</option>
                            </select>
                    </div> --}}
                </div>
                <div class="col-lg-12 col-sm-12">
                    <div class="products-prduct">
                        <div class="row">
                            @if ($products)
                                @foreach ($products as $product)
                                    <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                                        <div class="product-1" >
                                            <img src="{{ asset($product->images[0]->image) }}" alt="{{ $product->productname }}">
                                            <div class="prdct-icon">
                                                <a href="{{ route('product', [$product->id, Str::slug($product->productname)]) }}"><i class="far fa-heart"></i></a>
                                                <a href="{{ route('product', [$product->id, Str::slug($product->productname)]) }}">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </div>
                                            <div class="prdt-txt">
                                                <a href="{{ route('product', [$product->id, Str::slug($product->productname)]) }}">
                                                    <h4>{{ Str::limit($product->productname, 37) }}</h4>
                                                </a>
                                                <p> {{ Str::limit($product->description, 60) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No product found.</p>
                            @endif
                        </div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
