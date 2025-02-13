<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}" >
    <title>WICON - Update your technology</title>
    <meta name="description" content="Wicon Electronics world is one of the newest Electronic companies in Bangladesh. We have started our journey in 2009. Now we are looking up and we g=have already started our big journey. ">
    <meta name="keywords" content="wicon, wicon brand, wicon led, smart led, smart TV, android TV, wicon 32 led tv,price in bangladesh,wicon led tv 32 inch price,wicon led tv 24 inch price,wicon tv review,wicon tv showroom in bangladesh,wicon smart led tv,wicon 4k tv,wicon led tv 32 inch price in bangladesh,wicon 32 led tv price in bangladesh,wicon led tv 32 inch price,wicon led tv 24 inch price,wicon tv review,wicon tv showroom in bangladesh,wicon smart led tv,wicon 4k tv,wicon led tv 32 inch price in bangladesh">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!--  =================================
                 Header Part Start
          ==================================  -->

    <!-- Header Part Start -->

    <header id="header-part" class="header">
        <div class="top-header">
            <div class="container header-color">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="social">
                            <ul class="social-icons social-icons-simple ">
                                <li><a class="facebook" href="https://www.facebook.com/wicon.world/" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="insta" href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a class="whatsapp" href="#" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="login">
                            <ul>
                                <li><a class="offphn" href="tel:+880967877677" target="_self"><i class="fas fa-phone-square"></i><span>+880 967877677</span></a></li>
                                <!--                                <li><a class="signup" href="#" target="_self"><i class="far fa-user"></i><span>Sign up</span></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  =================================
                Navbar Part Start
          ==================================  -->
    <nav class="navbar navbar-expand-lg fixmenu">
        <div class="container nav-color">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('frontend/images/wicon-primum.png') }}" alt="cropped-Wicon-Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse mynav" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ route('products') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @php
                                $cats = App\Category::all();
                            @endphp
                            @foreach ($cats as $cat)
                                <a class="dropdown-item" href="{{ route('category.products', Str::slug($cat->catname) ) }}">{{ $cat->catname }}</a>
                            @endforeach
                            <a class="dropdown-item" href="{{ route('products') }}">All Products</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Our Services</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutUs') }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


@yield('content')



    <!--  =================================
                Footer Part Start
          ==================================  -->
          <a class="btop" href="#"><i class="fas fa-arrow-up"></i></a>
          <footer class="footer">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-4 col-sm-12">
                          <div class="foter-des">
                              <img src="images/WiconLogo.jpg" alt="WiconLogo">
                              <p class="text">
                                  We will provide completely reliable and high-quality products with state-of-the-art technology; solutions and services; resulting in customer loyalty, fair profit and an inspired human capital.
                              </p>
                              <div class="f_logo">
                                  <ul class="social-icons social-icons-simple ">
                                      <li><a class="facebook" href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a class="twitter" href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                      <li><a class="insta" href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                      <li><a class="whatsapp" href="#" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-sm-12">
                          <div class="contact">
                              <h2>Contact us</h2>
                              <ul>
                                  <li><i class="fas fa-map-marker-alt"></i></li>
                                  <li>
                                      <p>26/A/2 Topkhana Road, Segunbagicha, Dhaka 1000</p>
                                  </li>
                              </ul>
                              <ul>
                                  <li><i class="far fa-envelope"></i></li>
                                  <li>
                                      <p>info@wicon.com.bd </p>
                                      <p> www.wicon.com.bd</p>
                                  </li>
                              </ul>
                              <ul>
                                  <li><i class="fas fa-phone"></i></li>
                                  <li>
                                      <p>+880 1318314773 </p>
                                      <p>+880 9678776777</p>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-2 col-sm-12">
                          <div class="links">
                              <h2>Important Links</h2>
                              <ul>
                                  <li><a href="index.html">Home</a></li>
                                  <li><a href="product.html">Products</a></li>
                                  <li><a href="#">About us</a></li>
                                  <li><a href="contact.html">Contact us</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-3 col-sm-12">
                          <div class="myaccount">
                              <h2>Policy & Privacy</h2>
                              <ul class="account">
                                  <li><a href="#">Wishlist</a></li>
                                  <li><a href="#">Terms & Conditions Of Use</a></li>
                                  <li><a href="#">Legal Notice</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <!--
              <div class="row">
              <div class="col-lg-12">
                  <div class="payment-type">
                      <h6 class="accept">We accept  :</h6>
                      <ul>
                          <li><i class="fab fa-cc-amex"></i></li>
                          <li><i class="fab fa-cc-visa"></i></li>
                          <li><i class="fab fa-cc-paypal"></i></li>
                          <li><i class="fab fa-cc-mastercard"></i></li>
                          <li><i class="fab fa-cc-amazon-pay"></i></li>
                      </ul>
                  </div>
              </div>
          </div>
      -->
              </div>
          </footer>
          <!--  =================================
                       Footer-bottom Part Start
                ==================================  -->
          <section id="footer-bottom">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="copyright">
                              <p class="copy">Copyright <i class="far fa-copyright"></i> 2020. All Right Reserved by <span><strong>WICON</strong></span></p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <!--  =================================
                      Footer-bottom Part End
               ==================================  -->

          <script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
          <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
          <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
          <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('frontend/js/venobox.min.js') }}"></script>
          <script src="{{ asset('frontend/js/jquery.parallax-scroll.js') }}"></script>
          <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
          <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
          <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
          <script src="{{ asset('frontend/js/script.js') }}"></script>


          {{-- <script src="{{ asset('js/app.js') }}" async defer></script> --}}
      </body>

      </html>
