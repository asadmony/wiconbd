@extends('layouts.app')

@section('content')
    <!--  ====================================
                     Product-details Part Start
                  ====================================  -->
    <section id="product-details-part" class="product-details-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-header">
                        <h3>Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- NOTE: The Id of both of below tags should be same as below-->
                <!-- shop-dual-carousel -->
                <div class="col-lg-5 col-md-5 col-sm-12" id="shop-dual-carousel">
                    <!-- syncCarousel -->
                    <div class="owl-carousel carousel-shop-detail owl-theme owl-loaded" id="syncCarousel">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                @if ($product->images)
                                @foreach ($product->images as $image)
                                <div class="owl-item" style="width: 445px;">
                                    <div class="item">
                                        <a class="venobox" href="{{ asset($image->image) }}">
                                            <img style="width:auto; max-height: 420px" src="{{ asset($image->image) }}" alt="Latest News">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                {{-- <div class="owl-item" style="width: 445px;">
                                    <div class="item">
                                        <a class="venobox" data-gall="gallery01" href="{{ asset('frontend/images/WPDN2-1.png') }}">
                                            <img src="{{ asset('frontend/images/WPDN2-1.png') }}" alt="Latest News">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 445px;">
                                    <div class="item">
                                        <a class="venobox" data-gall="gallery01" href="{{ asset('frontend/images/WPDN9A-1.png') }}">
                                            <img src="{{ asset('frontend/images/WPDN9A-1.png') }}" alt="Latest News">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 445px;">
                                    <div class="item">
                                        <a class="venobox" data-gall="gallery01" href="{{ asset('frontend/images/WPGS3A-1.png') }}">
                                            <img src="{{ asset('frontend/images/WPGS3A-1.png') }}" alt="Latest News">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 445px;">
                                    <div class="item">
                                        <a class="venobox" data-gall="gallery01" href="{{ asset('frontend/images/WP-(Primium)2.png') }}">
                                            <img src="{{ asset('frontend/images/WP-(Primium)2.png') }}" alt="Latest News">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 445px;">
                                    <div class="item">
                                        <a class="venobox" data-gall="gallery01" href="{{ asset('frontend/images/WPDK5A-1.png') }}">
                                            <img src="{{ asset('frontend/images/WPDK5A-1.png') }}" alt="Latest News">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 445px;">
                                    <div class="item">
                                        <a class="venobox" data-gall="gallery01" href="{{ asset('frontend/images/WPDN2-1.png') }}">
                                            <img src="{{ asset('frontend/images/WPDN2-1.png') }}" alt="Latest News">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 445px;">
                                    <div class="item">
                                        <a class="venobox" data-gall="gallery01" href="{{ asset('frontend/images/WPGS3A-1.png') }}">
                                            <img src="{{ asset('frontend/images/WPGS3A-1.png') }}" alt="Latest News">
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 445px;">
                                    <div class="item">
                                        <a class="venobox" data-gall="gallery01" href="{{ asset('frontend/images/WPDN9A-1.png') }}">
                                            <img src="{{ asset('frontend/images/WPDN9A-1.png') }}" alt="Latest News">
                                        </a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 shop_info ">
                    <!--Shop detail-->
                    <h2 class="prdct-heading"><span>{{ $product->productname }}</span></h2>
                    <span class="starcolor">
                        <a href="#"title="4.4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>&nbsp;
                        <span class="text-grey"><span class="font-bold">4.4 </span>(21)</span>
                    </a>
                    </span>
                    <p class="prdct-text">{{ $product->description }}</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <ul class="prdct-dtil" style="list-style: disc;">
                                @if ($product->features)
                                    @foreach ($product->features as $feature)
                                    <li>
                                        <p class="my-1"><span>{{ $feature->featurename }} : </span><span class="font-light">{{ $feature->featurevalue }}</span></p>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="share-on-it">
                        <ul class="social-icons social-icons-simple darkcolor mt-2">
                            <li><span class="pr-2">Share: </span></li>
                            <li><a class="facebook" href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="insta" href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="whatsapp" href="#" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row margin_tophalf">

            </div>
            <div class="row pt-5">
                <div class="col-md-12">
                    <h3 class="Related-heading">
                        <span>Related</span> Products<span class="divider-left"></span>
                    </h3>
                </div>
                @if ($relproducts)
                    @foreach ($relproducts as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="shopping-box">
                        <div class="image sale text-center">
                            <a href="{{ route('product', [$product->id, Str::slug($product->productname)]) }}">
                                <img style="width: auto; max-height: 160px" src="{{ asset($product->images[0]->image) }}" alt="shop">
                            </a>

                        </div>
                        <div class="shop-content text-center">
                            <h5 class="darkcolor pb-2"><a href="{{ route('product', [$product->id, Str::slug($product->productname)]) }}">{{ Str::limit($product->productname, 20) }}</a></h5>
                            <p>Price: &#2547 {{ $product->price }}</p>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>


@endsection
