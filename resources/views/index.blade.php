@extends('layouts.app')

@section('content')
    <!--  =================================
                Slider Part start
         ==================================  -->
    @if ($sliders)

    <section id="banner-part">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <div class="banner-slider">
                    @php
                        $bglo = 1;
                    @endphp
                    @foreach ($sliders as $slider)
                    @php
                        if ($bglo < 5) {
                            $bglo++;
                        }else {
                            $bglo = 1;
                        }
                    @endphp
                    <div class="banner-{{ $bglo }}">
                        <div class="overlay">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="bnrtxt">
                                            <h2>ওয়াইকন</h2>
                                            <h1>{{ $slider->title }} </h1>
                                            <p>{{ $slider->details }} </p>
                                            @if ($slider->button)
                                            <a href="{{ $slider->buttonlink }}">{{ $slider->buttonname }}</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="bnrimg">
                                            <img src="{{ asset($slider->image) }}" alt="WPDK5A-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    @endif
    <!--  =================================
                Led-block Part start
          ==================================  -->
    <section id="led-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="led-img">
                        <img src="{{ asset('frontend/images/WP-(Primium)2.png') }}" alt="WP-(Primium)2" data-parallax='{"z": 150, "from scroll": 45, "duration": 50}'>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="led-text">
                        <h1 class="pdct-typ">WICON</h1>
                        <h3>PREMIUM LED</h3>
                        <p class="prct-dtl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium autem quisquam beatae unde esse neque iste consectetur necessitatibus iure, magnam quod est nobis inventore ipsum corporis ut labore culpa quis?
                        </p>
                        <a href="{{ route('products') }}" class="more-btn">More Product</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================
            Product Banner Part Start
         ================================ -->
    <section id="product-banner-part">
        <div class="container">
            @if ($banners)

            <div class="row product-banner-slider">
                @foreach ($banners as $banner)
                <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                    <div class="product-banner">
                            <img src="{{ asset($banner->image) }}" />
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>

    <!--  =================================
                Fan-block Part start
         ==================================  -->

    <section id="fan-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="fan-text">
                        <h1 class="pdct-typ">WICON</h1>
                        <h3>PREMIUM FAN</h3>
                        <p class="prct-dtl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium autem quisquam beatae unde esse neque iste consectetur necessitatibus iure, magnam quod est nobis inventore ipsum corporis ut labore culpa quis?
                        </p>
                        <a href="{{ route('products') }}" class="more-btn">More Product</a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="fan-img">
                        <img src="{{ asset('frontend/images/Premium Fan.png') }}" alt="WP-(Primium)2" data-parallax='{"z": 180, "duration":10}'>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </section>
    <!--  =================================
             Lastest-prdt Part start
          ==================================  -->
    <section id="spcl-product-part">
        <div class="container">
            <div class="row spcl-prdct-slider">
                @php
                    $latest = \App\Product::latest(4)->get();
                @endphp
                @foreach ($latest as $item)

                @endforeach
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="special-product">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-img">
                                    <a class="venobox" data-gall="gallery01" href="{{ asset('frontend/images/wicon-rechargeable-pink-large_Side.png') }}">
                                        <img src="{{ asset('frontend/images/wicon-rechargeable-pink-large_Side.png') }}" alt="wicon-rechargeable-pink-large_Side">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details">
                                    <a href="#">
                                        <h2 class="pdct-typ">WICON</h2>
                                    </a>
                                    <h4>Rechargeable Fan</h4>
                                    <p class="prct-dtl">Lorem ipsum dolor sit amet consectetur adipisicing elit. magnam quod est nobis inventore ipsum corporis ut labore culpa quis?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="special-product">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-img">
                                    <a class="venobox" data-gall="gallery01" href="images/wicon-rechargeable-pink-large_Side.png') }}">
                                        <img src="{{ asset('frontend/images/wicon-rechargeable-pink-large_Side.png') }}" alt="wicon-rechargeable-pink-large_Side">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details">
                                    <a href="#">
                                        <h2 class="pdct-typ">WICON</h2>
                                    </a>
                                    <h4>Rechargeable Fan</h4>
                                    <p class="prct-dtl">Lorem ipsum dolor sit amet consectetur adipisicing elit. magnam quod est nobis inventore ipsum corporis ut labore culpa quis?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="special-product">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-img">
                                    <a class="venobox" data-gall="gallery01" href="images/wicon-rechargeable-pink-large_Side.png') }}">
                                        <img src="{{ asset('frontend/images/wicon-rechargeable-pink-large_Side.png') }}" alt="wicon-rechargeable-pink-large_Side">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details">
                                    <a href="#">
                                        <h2 class="pdct-typ">WICON</h2>
                                    </a>
                                    <h4>Rechargeable Fan</h4>
                                    <p class="prct-dtl">Lorem ipsum dolor sit amet consectetur adipisicing elit. magnam quod est nobis inventore ipsum corporis ut labore culpa quis?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="special-product">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-img">
                                    <a class="venobox" data-gall="gallery01" href="images/wicon-rechargeable-pink-large_Side.png') }}">
                                        <img src="{{ asset('frontend/images/wicon-rechargeable-pink-large_Side.png') }}" alt="wicon-rechargeable-pink-large_Side">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details">
                                    <a href="#">
                                        <h2 class="pdct-typ">WICON</h2>
                                    </a>
                                    <h4>Rechargeable Fan</h4>
                                    <p class="prct-dtl">Lorem ipsum dolor sit amet consectetur adipisicing elit. magnam quod est nobis inventore ipsum corporis ut labore culpa quis?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  =================================
              Freeze-block Part start
          ==================================  -->
    <section id="freeze-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="freeze-img">
                        <img src="{{ asset('frontend/images/freeze.png') }}" alt="freeze">
                    </div>
                    <div class="freeze-img-2">
                        <img src="{{ asset('frontend/images/freeze.png') }}" alt="freeze">
                    </div>
                    <div class="freeze-img-3">
                        <img src="{{ asset('frontend/images/freeze.png') }}" alt="freeze">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="freeze-text">
                        <h2 class="pdct-typ">WICON</h2>
                        <h4>PREMIUM LED</h4>
                        <p class="prct-dtl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium autem quisquam beatae unde esse neque iste consectetur necessitatibus iure, magnam quod est nobis inventore ipsum corporis ut labore culpa quis?
                        </p>
                        <ul class="colors-freze">
                            <li>
                                <a class="freeze-color" href="#">
                                    <img src="{{ asset('frontend/images/freeze-color-1.png') }}" alt="freeze-color-1">
                                </a>
                            </li>
                            <li>
                                <a class="freeze-color" href="#">
                                    <img src="{{ asset('frontend/images/freeze-color-2.png') }}" alt="freeze-color-2">
                                </a>
                            </li>
                            <li>
                                <a class="freeze-color" href="#">
                                    <img src="{{ asset('frontend/images/freeze-color-1.png') }}" alt="freeze-color-1">
                                </a>
                            </li>
                        </ul>
                        <a href="{{ route('products') }}" class="more-btn">More Product</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  =================================
                 Video-content Part start
          ==================================  -->
    <section id="video-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 p-0">
                    <div class="video-box">
                        <iframe id="youtubevideo" src="https://www.youtube-nocookie.com/embed/L_EOATyJwz0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
